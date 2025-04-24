<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\AboutController;
use App\Http\Controllers\clients\ToursController;
use App\Http\Controllers\clients\TravelGuidesController;
use App\Http\Controllers\clients\DestinationController;
use App\Http\Controllers\clients\ContactController;
use App\Http\Controllers\clients\ErrorsController;
use App\Http\Controllers\clients\TourDetailController;
use App\Http\Controllers\clients\BlogController;
use App\Http\Controllers\clients\BlogDetailController;
use App\Http\Controllers\clients\LoginController;
use App\Http\Controllers\clients\LoginGoogleController;
use App\Http\Controllers\clients\SearchController;
use App\Http\Controllers\clients\BookingController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\clients\MyTourController;
use App\Http\Controllers\clients\TourBookedController;
use App\Http\Controllers\admin\ToursManagementController;
use App\Http\Controllers\admin\BookingManagementController;
use App\Http\Controllers\admin\ContactManagementController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/',   [HomeController::class, 'index'])->name(name: 'home');
Route::get('/about',   [AboutController::class, 'index'])->name(name: 'about');
Route::get('/tours',   [ToursController::class, 'index'])->name(name: 'tours');
Route::get('/filter-tours', [ToursController::class, 'filterTours'])->name('filter-tours');
Route::get('/travel-guides',   [TravelGuidesController::class, 'index'])->name(name: 'team');
Route::get('/destination',   [DestinationController::class, 'index'])->name(name: 'destination');
Route::get('/contact',   [ContactController::class, 'index'])->name(name: 'contact');
Route::post('/create-contact', [ContactController::class, 'createContact'])->name('create-contact');
Route::get('/tour-detail/{id?}',   [TourDetailController::class, 'index'])->name(name: 'tour-detail');
Route::get('/contact1',   [ErrorsController::class, 'index'])->name(name: 'contact1');
Route::get('/blogs',   [BlogController::class, 'index'])->name(name: 'blogs');
Route::get('/blog-detail',   [BlogDetailController::class, 'index'])->name(name: 'blog-detail');
Route::get('/search', [SearchController::class, 'index'])->name(name: 'search');

//Login
Route::get('/login',   [LoginController::class, 'index'])->name(name: 'login');
Route::post('/register',   [LoginController::class, 'register'])->name('register');
Route::post('/login',   [LoginController::class, 'login'])->name('user-login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('activate-account/{token}', [LoginController::class, 'activateAccount'])->name('activate.account');

//Login with google
Route::get('auth/google', [LoginGoogleController::class, 'redirectToGoogle'])->name('login-google');
Route::get('auth/google/callback', [LoginGoogleController::class, 'handleGoogleCallback']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Booking
Route::post('/booking/{id?}', [BookingController::class, 'index'])->name('booking')->middleware('checkLoginClient');
Route::post('/create-booking', [BookingController::class, 'createBooking'])->name('create-booking');
Route::get('/booking', [BookingController::class, 'handlePaymentMomoCallback'])->name('handlePaymentMomoCallback');

//Payment with Momo
Route::post('/create-momo-payment', [BookingController::class, 'createMomoPayment'])->name('createMomoPayment');

//My tour
Route::get('/my-tours', [MyTourController::class, 'index'])->name('my-tours')->middleware('checkLoginClient');

//Tour booked
Route::get('/tour-booked', [TourBookedController::class, 'index'])->name('tour-booked')->middleware('checkLoginClient');
Route::post('/cancel-booking', [TourBookedController::class, 'cancelBooking'])->name('cancel-booking');

//Booking-check
Route::post('/checkBooking', [BookingController::class, 'checkBooking'])->name('checkBooking')->middleware('checkLoginClient');
Route::post('/reviews', [TourDetailController::class, 'reviews'])->name('reviews')->middleware('checkLoginClient');

Route::prefix('admin')->group(function () {
    //Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/tours', [ToursManagementController::class, 'index'])->name('admin.tours');
    Route::get('/page-add-tours', [ToursManagementController::class, 'pageAddTours'])->name('admin.page-add-tours');
    Route::get('/tour-edit', [ToursManagementController::class, 'getTourEdit'])->name('admin.tour-edit');
    Route::post('/edit-tour', [ToursManagementController::class, 'updateTour'])->name('admin.edit-tour');
    Route::post('/add-images-tours', [ToursManagementController::class, 'addImagesTours'])->name('admin.add-images-tours');
    Route::post('/add-timeline', [ToursManagementController::class, 'addTimeline'])->name('admin.add-timeline');
    Route::post('/delete-tour', [ToursManagementController::class, 'deleteTour'])->name('admin.delete-tour');
    Route::post('/add-tours', [ToursManagementController::class, 'addTours'])->name('admin.add-tours');
    Route::post('/add-temp-images', [ToursManagementController::class, 'uploadTempImagesTours'])->name('admin.add-temp-images');
    Route::get('/booking', [BookingManagementController::class, 'index'])->name('admin.booking');
    Route::post('/confirm-booking', [BookingManagementController::class, 'confirmBooking'])->name('admin.confirm-booking');
    Route::get('/booking-detail/{id?}', [BookingManagementController::class, 'showDetail'])->name('admin.booking-detail');
    Route::post('/finish-booking', [BookingManagementController::class, 'finishBooking'])->name('admin.finish-booking');
    Route::post('/admin/send-pdf', [BookingManagementController::class, 'sendPdf'])->name('admin.send.pdf');
    Route::post('/received-money', [BookingManagementController::class, 'receiviedMoney'])->name('admin.received');
    //Contact management
    Route::get('/contact', [ContactManagementController::class, 'index'])->name('admin.contact');
    Route::post('/reply-contact', [ContactManagementController::class, 'replyContact'])->name('admin.reply-contact');
    Route::delete('/admin/contact/delete/{id}', [ContactManagementController::class, 'deleteContact'])->name('admin.contact.delete');
});
