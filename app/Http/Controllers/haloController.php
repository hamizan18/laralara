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
}
