<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index () {

        if (Auth::check()) {
            // Kalau sudah login, langsung redirect ke /leads
            return redirect('leads');
        }

        return view('login.index');
    }

    public function authenticate(Request $r) {

        $credentials = $r->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:30'
        ]);

        if (Auth::attempt($credentials)) {
            $r->session()->regenerate();
            return redirect()->intended('/leads');
        }


        return back()->with('loginError', 'Login failed!')->withInput($r->only('email'));
    }


    public function logout(Request $r) {

        Auth::logout();
        // auth()->logout();

        $r->session()->invalidate();
        $r->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logout success!');
    }
}
