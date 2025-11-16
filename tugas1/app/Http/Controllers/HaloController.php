<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function data() {
        $nama = 'Mijaenn';
        $umur = 19;

        return view('halo', compact('nama', 'umur'));
    }
}
