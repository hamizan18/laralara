<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mahasiswacontroller;
use App\Http\Controllers\AuthController;

Route::get('/mahasiswa', [Mahasiswacontroller::class, 'index'])->middleware('auth');
Route::get('/berhasil', function () {
    return view('berhasil-mhs');
});
Route::post('/mahasiswa', [Mahasiswacontroller::class, 'store'])->middleware('auth');
Route::get('/form-mhs', [Mahasiswacontroller::class, 'create'])->name('form');
Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout']);