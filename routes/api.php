<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/*
| Fitur Wajib: Autentikasi (Login & Register) [cite: 15, 17]
*/
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

/*
| Fitur Wajib: CRUD via API & Token Protection [cite: 19, 21, 23]
*/
Route::middleware('auth:sanctum')->group(function () {
    // Ini mencakup GET, POST, PUT, DELETE untuk tabel utama kamu [cite: 21]
    Route::apiResource('products', ProductController::class);
    Route::apiResource('categories', CategoryController::class);
});
