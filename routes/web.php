<?php

use App\Http\Controllers\Website\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ApusFly Public Website
|--------------------------------------------------------------------------
|
| Public-facing Blade pages for apusfly.com.
|
| Authentication, user management, bookings, pilots, providers,
| and administrative operations will be handled separately
| through the Laravel API.
|
*/

Route::view('/', 'website.home')->name('home');

Route::view('/about', 'website.about')->name('about');

Route::view('/contact', 'website.contact')->name('contact');

Route::view('/terms', 'website.terms')->name('terms');

Route::view('/privacy', 'website.privacy')->name('privacy');

/*
|--------------------------------------------------------------------------
| Public Services
|--------------------------------------------------------------------------
*/

Route::get('/services/{slug}', [ServiceController::class, 'show'])
    ->name('services.show');
