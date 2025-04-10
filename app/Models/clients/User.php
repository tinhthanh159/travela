<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;

    protected $table = 'tbl_users';

    // Lấy ID người dùng theo username
    public function getUserId($username)
    {
        return DB::table($this->table)
            ->where('username', $username)
            ->value('userId');
    }

    // Lấy thông tin người dùng theo ID
    public function getUser($id)
    {
        return DB::table($this->table)
            ->where('userId', $id)
            ->first();
    }

    // Cập nhật thông tin người dùng
    public function updateUser($id, $data)
    {
        return DB::table($this->table)
            ->where('userId', $id)
            ->update($data);
    }

    // Lấy 3 tour gần nhất của người dùng
    public function getMyTours($id)
    {
        $myTours = DB::table('tbl_booking')
            ->join('tbl_tours', 'tbl_booking.tourId', '=', 'tbl_tours.tourId')
            ->join('tbl_checkout', 'tbl_booking.bookingId', '=', 'tbl_checkout.bookingId')
            ->where('tbl_booking.userId', $id)
            ->orderByDesc('tbl_booking.bookingDate')
            ->take(3)
            ->get();

        foreach ($myTours as $tour) {
            // Lấy đánh giá (rating) của user cho mỗi tour
            $tour->rating = DB::table('tbl_reviews')
                ->where('tourId', $tour->tourId)
                ->where('userId', $id)
                ->value('rating');

            // Lấy danh sách hình ảnh của tour
            $tour->images = DB::table('tbl_images')
                ->where('tourId', $tour->tourId)
                ->pluck('imageUrl');
        }

        return $myTours;
    }
}
