<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class haloController extends Controller
{
    public function index() {
        $produk = Produk::all();
        return view('halo', ['produk' => $produk]);
    }
    public function form() {
        return view('produk');
    }
    public function simpan(Request $request) {
        Produk::create([
            'nama_produk' => $request->nama,
            'harga_produk' => $request->harga
        ]);

    return redirect('/berhasil');
    }
}
