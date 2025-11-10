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
        return view('form-produk');
    }
    public function simpan(Request $request) {
        Produk::create([
            'nama' => $request->nama,
            'harga' => $request->harga
        ]);

    return redirect('/halo')->with('success', 'Produk berhasil disimpan!');
    }
}
