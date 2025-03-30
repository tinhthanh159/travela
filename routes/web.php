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

// Route::get('/', function () {
//     return view('home');
// });

Route::get(uri: '/', action: [HomeController::class, 'index' ])->name(name: 'home');
Route::get(uri: '/about', action: [AboutController::class, 'index' ])->name(name: 'about');
Route::get(uri: '/tours', action: [ToursController::class, 'index' ])->name(name: 'tours');
Route::get(uri: '/travel-guides', action: [TravelGuidesController::class, 'index' ])->name(name: 'team');
Route::get(uri: '/destination', action: [DestinationController::class, 'index' ])->name(name: 'destination');
Route::get(uri: '/contact', action: [ContactController::class, 'index' ])->name(name: 'contact');
Route::get(uri: '/tour-detail/{id?}', action: [TourDetailController::class, 'index' ])->name(name: 'tour-detail');
Route::get(uri: '/contact1', action: [ErrorsController::class, 'index' ])->name(name: 'contact1');
Route::get(uri: '/blogs', action: [BlogController::class, 'index' ])->name(name: 'blogs');
Route::get(uri: '/blog-detail', action: [BlogDetailController::class, 'index' ])->name(name: 'blog-detail');
Route::get(uri: '/login', action: [LoginController::class, 'index' ])->name(name: 'login');