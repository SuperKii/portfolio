<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request) {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success', 'Welcome ' . Auth::user()->nama);
        }

        return redirect()->back()->with('error','Username atau password salah.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('landingPage')->with('success', 'Selamat Jalan....');
    }
}
