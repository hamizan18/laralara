<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mahasiswacontroller;

Route::get('/mahasiswa', [Mahasiswacontroller::class, 'index']);
Route::get('/berhasil', function () {
    return view('/berhasil-mhs');
});
Route::post('/mahasiswa', [Mahasiswacontroller::class, 'store']);
Route::get('/form-mhs', [Mahasiswacontroller::class, 'create']);