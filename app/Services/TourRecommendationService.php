<?php

namespace App\Services;

use App\Models\clients\Tours;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class TourRecommendationService
{
    protected Tours $tours;

    public function __construct(Tours $tours)
    {
        $this->tours = $tours;
    }

    /**
     * Build a personalized list of tour recommendations for the given user.
     */
    public function recommendForUser(?int $userId, int $limit = 4, ?int $excludeTourId = null): Collection
    {
        $availableTours = DB::table('tbl_tours')
            ->select('tourId', 'title', 'description', 'priceAdult', 'priceChild', 'time', 'destination', 'domain', 'quantity')
            ->where('availability', 1)
            ->when($excludeTourId, fn($query) => $query->where('tourId', '<>', $excludeTourId))
            ->get()
            ->keyBy('tourId');

        if ($availableTours->isEmpty()) {
            return collect();
        }

        $tourIds = $availableTours->keys()->all();

        $ratings = DB::table('tbl_reviews')
            ->select('tourId', DB::raw('AVG(rating) as averageRating'), DB::raw('COUNT(*) as reviewCount'))
            ->whereIn('tourId', $tourIds)
            ->groupBy('tourId')
            ->get()
            ->keyBy('tourId');

        $bookings = DB::table('tbl_booking')
            ->select('tourId', DB::raw('COUNT(*) as totalBookings'))
            ->whereIn('tourId', $tourIds)
            ->where('bookingStatus', 'f')
            ->groupBy('tourId')
            ->get()
            ->keyBy('tourId');

        $availableTours = $availableTours->map(function ($tour) use ($ratings, $bookings) {
            $stats = $ratings->get($tour->tourId);
            $tour->averageRating = $stats->averageRating ?? 0.0;
            $tour->reviewCount = $stats->reviewCount ?? 0;

            $bookingStats = $bookings->get($tour->tourId);
            $tour->totalBookings = $bookingStats->totalBookings ?? 0;

            return $tour;
        });

        $userTourIds = collect();

        if ($userId) {
            $userTourIds = DB::table('tbl_booking')
                ->select('tourId')
                ->where('userId', $userId)
                ->whereIn('bookingStatus', ['f', 'c', 'p'])
                ->pluck('tourId');

            $userRatedTours = DB::table('tbl_reviews')
                ->select('tourId')
                ->where('userId', $userId)
                ->pluck('tourId');

            $userTourIds = $userTourIds->merge($userRatedTours)->unique();
        }

        $preferenceTours = $availableTours->only($userTourIds->all());

        if ($preferenceTours->isEmpty()) {
            return $this->fallbackRecommendations($limit, $excludeTourId);
        }

        $domainWeights = $preferenceTours->groupBy('domain')->map->count();
        $timeWeights = $preferenceTours->groupBy('time')->map->count();
        $avgPrice = $preferenceTours->avg('priceAdult');
        $destinationTokens = $preferenceTours
            ->flatMap(fn($tour) => $this->tokenize($tour->destination))
            ->countBy();

        $scores = [];

        foreach ($availableTours as $tourId => $tour) {
            if ($userTourIds->contains($tourId)) {
                continue;
            }

            $score = 0.0;

            if ($domainWeights->isNotEmpty()) {
                $domainScore = $domainWeights->get($tour->domain, 0);
                $score += 3 * ($domainScore / max($domainWeights->max(), 1));
            }

            if ($timeWeights->isNotEmpty()) {
                $timeScore = $timeWeights->get($tour->time, 0);
                $score += 2 * ($timeScore / max($timeWeights->max(), 1));
            }

            if ($destinationTokens->isNotEmpty()) {
                $tokens = $this->tokenize($tour->destination);
                $matched = 0;

                foreach ($tokens as $token) {
                    $matched += $destinationTokens->get($token, 0);
                }

                if ($matched > 0) {
                    $score += 2.5 * ($matched / max($destinationTokens->max(), 1));
                }
            }

            if ($avgPrice) {
                $priceSimilarity = 1 - min(abs($tour->priceAdult - $avgPrice) / max($avgPrice, 1), 1);
                $score += 2 * $priceSimilarity;
            }

            $score += ($tour->averageRating ?? 0) * 0.7;
            $score += log(1 + ($tour->totalBookings ?? 0)) * 0.3;

            $scores[$tourId] = $score;
        }

        arsort($scores);
        $recommendedIds = array_slice(array_keys($scores), 0, $limit);

        if (count($recommendedIds) < $limit) {
            $remaining = $limit - count($recommendedIds);
            $fallbackIds = $availableTours
                ->reject(fn($tour, $tourId) => in_array($tourId, $recommendedIds, true) || $userTourIds->contains($tourId))
                ->sortByDesc(fn($tour) => [$tour->averageRating, $tour->totalBookings])
                ->take($remaining)
                ->keys()
                ->all();

            $recommendedIds = array_merge($recommendedIds, $fallbackIds);
        }

        if (empty($recommendedIds)) {
            return $this->fallbackRecommendations($limit, $excludeTourId);
        }

        $tours = $this->tours->toursRecommendation($recommendedIds);

        foreach ($tours as $tour) {
            $tour->recommendationScore = isset($scores[$tour->tourId])
                ? round($scores[$tour->tourId], 2)
                : null;
        }

        return $tours;
    }

    protected function fallbackRecommendations(int $limit, ?int $excludeTourId): Collection
    {
        $fallback = $this->tours->toursPopular($limit)->reject(fn($tour) => $tour->tourId === $excludeTourId);

        if ($fallback->count() < $limit) {
            $additional = DB::table('tbl_tours')
                ->select('tourId')
                ->where('availability', 1)
                ->when($excludeTourId, fn($query) => $query->where('tourId', '<>', $excludeTourId))
                ->orderByDesc('tourId')
                ->take($limit - $fallback->count())
                ->pluck('tourId')
                ->all();

            if (!empty($additional)) {
                $moreTours = $this->tours->toursRecommendation($additional);
                $fallback = $fallback->concat($moreTours);
            }
        }

        foreach ($fallback as $tour) {
            $tour->recommendationScore = null;
        }

        return $fallback->take($limit);
    }

    protected function tokenize(?string $value): array
    {
        if (empty($value)) {
            return [];
        }

        $value = mb_strtolower($value, 'UTF-8');

        $tokens = preg_split('/[^\p{L}\p{N}]+/u', $value, -1, PREG_SPLIT_NO_EMPTY);

        return array_values(array_filter($tokens, fn($token) => mb_strlen($token, 'UTF-8') > 2));
    }
}
