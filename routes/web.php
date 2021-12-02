<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


// to be deleted
Route::group(['middleware' => 'auth'], function () {
    Route::view('table-list', 'pages.table_list')->name('table');
    Route::view('typography', 'pages.typography')->name('typography');
    Route::view('icons', 'pages.icons')->name('icons');
    Route::view('map', 'pages.map')->name('map');
    Route::view('notifications', 'pages.notifications')->name('notifications');
    Route::view('rtl-support', 'pages.language')->name('language');
    Route::view('upgrade', 'pages.upgrade')->name('upgrade');
});

Route::group(['middleware' => 'auth', 'perfix' => '/admin', 'as' => 'admin.'], function () {
    // TODO: please revisit this group. and make sure to use one controller - Anwar
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('users', UserController::class)->except('show');
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('profile/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::get('users.password/{user}', [UserController::class, 'password'])->name('users.password');
    Route::put('users.password/{user}', [UserController::class, 'password'])->name('users.password');
    Route::resource('users', UserController::class);
});
