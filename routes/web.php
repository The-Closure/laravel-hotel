<?php

use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\RoomServicesController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();

// to be deleted
Route::group(['middleware' => 'auth'], function () {
    Route::view('rtl-support', 'pages.language')->name('language');
});

Route::group(['middleware' => 'auth', 'prefix' => '/admin', 'as' => 'admin.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('users', UserController::class)->except('show');
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('profile/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::resource('reservations', ReservationController::class)->except('show');
    Route::get('users/{user}/password', [UserController::class, 'password'])->name('users.password');
    Route::put('users/{user}/password', [UserController::class, 'password'])->name('users.password');
    Route::resource('users', UserController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('room-services', RoomServicesController::class);
    Route::resource('reviews', ReviewController::class);
    Route::resource('offers', OfferController::class);

});
