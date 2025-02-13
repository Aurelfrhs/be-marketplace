<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('product', [ProductController::class, 'index']);
Route::get('product/{id}', [ProductController::class, 'show']);
Route::post('register', [AuthController::class, 'register']);
Route::post('auth', [AuthController::class, 'auth']);

Route::group([
    'midlleware' => 'auth:sanctum'
], function() {
Route::post('product', [ProductController::class, 'store']);
Route::post('product/{id}', [ProductController::class, 'update']);
Route::resource('product-types', ProductTypeController::class);
});

Route::resource('banners', BannerController::class);
Route::post('banner-update/{id}', [BannerController::class, 'update']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');































// route::post('product-update/{id}' , [ProductController::class, 'update']);
// route::post('banners-update/{id}' , [BannerController::class, 'update']);
// Route::resource('product', ProductController::class);
// Route::resource('banners', BannerController::class);


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');












