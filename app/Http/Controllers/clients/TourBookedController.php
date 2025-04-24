<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Booking;
use App\Models\clients\Tours;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TourBookedController extends Controller
{
    private $tour;
    private $booking;

    public function __construct()
    {
        $this->tour = new Tours();
        $this->booking = new Booking();
    }
    public function index(Request $req)
    {
        $title = "Tour đã đặt";

        $bookingId = $req->input('bookingId');
        $checkoutId = $req->input('checkoutId');
        $tour_booked = $this->tour->tourBooked($bookingId, $checkoutId);

        // Check if the tour_booked has valid data before accessing properties
        if ($tour_booked && $tour_booked->startDate) {
            $today = Carbon::now();
            $startDate = Carbon::parse($tour_booked->startDate);
            $diffInDays = $today->diffInDays($startDate, false); // dùng false để phân biệt âm/dương
        
            $hide = $diffInDays <= 7 ? 'hide' : ''; // Còn hơn 7 ngày thì show nút
        } else {
            $hide = '';
        }
        

        // dd($tour_booked);
        return view("clients.tour-booked", compact('title', 'tour_booked', 'hide', 'bookingId'));
    }

    public function cancelBooking(Request $req)
    {
        $tourId = $req->tourId;
        $quantityAdults = $req->quantity__adults;
        $quantityChildren = $req->quantity__children;
        $bookingId = $req->bookingId;


        $tour = $this->tour->getTourDetail($tourId);
        $currentQuantity = $tour->quantity;

        // Tính toán số lượng trả lại
        $return_quantity = $quantityAdults + $quantityChildren;

        // Cập nhật lại số lượng mới cho tour
        $newQuantity = $currentQuantity + $return_quantity;
        $updateQuantity = $this->tour->updateTours($tourId, ['quantity' => $newQuantity]);

        // Hủy booking
        $updateBooking = $this->booking->cancelBooking($bookingId);

        if ($updateQuantity && $updateBooking) {
            toastr()->success('Hủy thành công!',[], 'Thông báo');
            
        }else{
            toastr()->error('Có lỗi xảy ra !',[], 'Thông báo');
        }

        return redirect()->route('home');
    }
}