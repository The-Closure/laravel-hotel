<?php

use App\Http\Controllers\Api\V1\ReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::apiResource('reviews', ReviewController::class)->only(['index', 'show']);
    Route::apiResource('reviews', ReviewController::class)->only()->middleware('auth:sanctum');
    Route::resource('offers', OfferController::class)->only(['index', 'show'])->middleware('auth:sanctum');
});
