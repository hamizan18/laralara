<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProductController extends Controller
{
    // Tampilkan data
    public function index() {
        $product = Produk::all(); // baca semua data dari tabel produk disimpan ke variabel $product
        return view('produk', ['product' => $product]); // ngirim data dengan nama $product ke view produk.blade.php
    }

    // Tampilin form input
    public function create() {
        return view('form-produk'); // menampilkan form input data produk di view form-produk.blade.php
    }

    // Simpan data
    public function store(Request $request) {
        Produk::create([
            'name' => $request->name, // mengambil data dari input name pada form
            'price' => $request->price, // mengambil data dari input price pada form
            'deskripsi' => $request->deskripsi // mengambil data dari input deskripsi pada form
        ]); 
        
        return redirect('/berhasil'); // setelah data disimpan, redirect ke halaman /berhasil
    }
}
