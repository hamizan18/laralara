<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class Mahasiswacontroller extends Controller
{
    // Nampilin semua mahasiswa
    public function index() {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function create() {
        return view('form-mahasiswa');
    }

    public function store(Request $request) {
        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/berhasil');
    }
}
