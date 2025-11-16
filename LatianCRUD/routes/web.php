<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\haloController;

Route::get('/halo', [HaloController::class, 'index']);
Route::post('/produk/simpan', [HaloController::class, 'simpan']);
Route::post('/produk', [HaloController::class, 'produk']);