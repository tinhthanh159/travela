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


// Route::get('/', function () {
//     return view('home');
// });

Route::get( '/',   [HomeController::class, 'index' ])->name(name: 'home');
Route::get( '/about',   [AboutController::class, 'index' ])->name(name: 'about');
Route::get( '/tours',   [ToursController::class, 'index' ])->name(name: 'tours');
Route::get('/filter-tours', [ToursController::class, 'filterTours'])->name('filter-tours');
Route::get( '/travel-guides',   [TravelGuidesController::class, 'index' ])->name(name: 'team');
Route::get( '/destination',   [DestinationController::class, 'index' ])->name(name: 'destination');
Route::get( '/contact',   [ContactController::class, 'index' ])->name(name: 'contact');
Route::post('/create-contact', [ContactController::class, 'createContact'])->name('create-contact');
Route::get( '/tour-detail/{id?}',   [TourDetailController::class, 'index' ])->name(name: 'tour-detail');
Route::get( '/contact1',   [ErrorsController::class, 'index' ])->name(name: 'contact1');
Route::get( '/blogs',   [BlogController::class, 'index' ])->name(name: 'blogs');
Route::get( '/blog-detail',   [BlogDetailController::class, 'index' ])->name(name: 'blog-detail');
Route::get('/search', [SearchController::class, 'index'])->name(name: 'search');

//Login
Route::get( '/login',   [LoginController::class, 'index' ])->name(name: 'login');
Route::post( '/register',   [LoginController::class, 'register'])->name('register');
Route::post( '/login',   [LoginController::class, 'login'])->name('user-login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('activate-account/{token}', [LoginController::class, 'activateAccount'])->name('activate.account');

//Login with google
Route::get('auth/google', [LoginGoogleController::class, 'redirectToGoogle'])->name('login-google');
Route::get('auth/google/callback', [LoginGoogleController::class, 'handleGoogleCallback']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
