<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', [\App\Http\Controllers\UserController::class, 'login']);
Route::post('logout', [\App\Http\Controllers\UserController::class, 'logout']);

Route::prefix('products')->middleware('auth:sanctum')->group(function () {
    Route::get('', [\App\Http\Controllers\ProductController::class, 'list']);
    Route::get('top', [\App\Http\Controllers\ProductController::class, 'top']);
    Route::get('{id}', [\App\Http\Controllers\ProductController::class, 'info']);
    Route::post('', [\App\Http\Controllers\ProductController::class, 'create']);
});

Route::prefix('cart')->middleware('auth:sanctum')->group(function () {
    Route::get('', [\App\Http\Controllers\CartController::class, 'info']);
    Route::post('', [\App\Http\Controllers\CartController::class, 'add']);
});
