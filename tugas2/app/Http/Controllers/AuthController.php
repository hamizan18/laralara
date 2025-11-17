<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm() {
        return view('login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }
        return back()->with('error', 'Email or Password is Salah ehe');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
