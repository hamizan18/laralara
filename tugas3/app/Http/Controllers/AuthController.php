<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin() {
        return view('login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        // Mengecek kebenaran password dan email
        if(Auth::attempt($credentials)) { // Ngebandingin otomatis dengan yang diinput
            return redirect('/dashboard');
        }

        return back()->with('error', 'Email dan password salah');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
