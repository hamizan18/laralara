<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\haloController;

Route::get('/halo', [HaloController::class, 'index']);
Route::get('/produk/tambah', [HaloController::class, 'form']);
Route::post('/produk/simpan', [HaloController::class, 'simpan']);