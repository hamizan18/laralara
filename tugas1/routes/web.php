<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaloController;
use App\Http\Controllers\ProductController;

Route::get('/produk', [ProductController::class, 'index']); // tampil data
Route::post('/produk', [ProductController::class, 'store']); // Simpan data
Route::get('/berhasil', function () {
    return view('berhasil');
}); 
Route::get('/form-produk', [ProductController::class, 'create']); // tampil form
