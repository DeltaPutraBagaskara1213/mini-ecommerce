<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Kumpulkan semua import Controller di sini
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route untuk Auth (Register & Login)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Route untuk semua fitur CRUD Produk
Route::apiResource('products', ProductController::class);
    
// Route untuk fitur Transaksi (Checkout)
Route::apiResource('transactions', TransactionController::class)->only(['index', 'store', 'show']);

// Route untuk semua fitur CRUD Produk (Ini biarin aja publik, orang bebas lihat etalase)
    Route::apiResource('products', ProductController::class);
    
// Gembok khusus untuk fitur Transaksi
Route::middleware('auth:sanctum')->group(function () {
Route::apiResource('transactions', TransactionController::class)->only(['index', 'store', 'show']);
});