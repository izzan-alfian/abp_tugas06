<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProductController;

// Route untuk menampilkan halaman daftar produk
Route::get('/product', [ProductController::class, 'index']);

// Route untuk menampilkan form tambah produk
Route::get('/product/create', [ProductController::class, 'create']);

// Route untuk menyimpan data produk baru
Route::post('/product', [ProductController::class, 'store']);

// Route untuk menampilkan halaman edit produk
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);

// Route untuk menyimpan perubahan pada produk yang diedit
Route::put('/product/{id}', [ProductController::class, 'update']);

// Route untuk menghapus produk
Route::delete('/product/{id}', [ProductController::class, 'destroy']);

Route::get('/test', function() {
    return view('index');
});
