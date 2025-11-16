<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaloController;
use App\Http\Controllers\ProductController;

Route::get('/produk', [ProductController::class, 'index']); // tampil data
Route::post('/produk', [ProductController::class, 'store']); // tampil data
Route::get('/berhasil', function () {
    return view('berhasil');
}); // simpan data
Route::get('/form-produk', [ProductController::class, 'create']); // tampil form
