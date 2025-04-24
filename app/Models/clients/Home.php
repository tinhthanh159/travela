<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    use HasFactory;

    protected $table = 'tbl_tours';

    public function getHomeTours()
    {
        $tours = DB::table($this->table)
            ->leftJoin('tbl_reviews', 'tbl_tours.tourId', '=', 'tbl_reviews.tourId')
            ->select(
                'tbl_tours.tourId',
                'tbl_tours.title',
                'tbl_tours.description',
                'tbl_tours.priceAdult',
                'tbl_tours.priceChild',
                'tbl_tours.time',
                'tbl_tours.destination',
                'tbl_tours.quantity',
                DB::raw('AVG(tbl_reviews.rating) as averageRating')
            )
            ->where('availability', 1)
            ->groupBy(
                'tbl_tours.tourId',
                'tbl_tours.title',
                'tbl_tours.description',
                'tbl_tours.priceAdult',
                'tbl_tours.priceChild',
                'tbl_tours.time',
                'tbl_tours.destination',
                'tbl_tours.quantity'
            )
            ->orderByDesc('averageRating')
            ->take(4)
            ->get();

        foreach ($tours as $tour) {
            // Lấy danh sách hình ảnh thuộc về tour
            $tour->images = DB::table('tbl_images')
                ->where('tourId', $tour->tourId)
                ->pluck('imageUrl');
            // Nếu không có review thì gán rating = 0
            $tour->rating = $tour->averageRating ?? 0;
        }

        return $tours;
    }

    public function getHomeTours_domain()
    {
        // Lấy 4 tour mới nhất (hoặc bạn có thể thêm ->orderBy('tourId', 'desc') nếu muốn theo thứ tự mới nhất)
        $tours_domain = DB::table($this->table)
            ->inRandomOrder()
            ->take(6)
            ->get();


        foreach ($tours_domain as $tour) {
            // Lấy danh sách hình ảnh thuộc về tour
            $tour->images = DB::table('tbl_images')
                ->where('tourId', $tour->tourId)
                ->pluck('imageUrl');
            // Tạo instance của Tours và gọi reviewStats
            $toursModel = new Tours();
            $tour->rating = $toursModel->reviewStats($tour->tourId)->averageRating;
        }

        return $tours_domain;
    }
}
