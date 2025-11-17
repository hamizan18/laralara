<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/logout', [AuthController::class, 'logout']);