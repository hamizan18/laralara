<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\haloController;

Route::get('/halo', [HaloController::class, 'index']);