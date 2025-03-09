<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        // dd('berhasil');

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            Session::flash('loginSuccess', 'Login berhasil!');
            return redirect()->intended('administrator');
        }

        return back()->with([
            'email' => 'Email atau password tidak sesuai',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Session::flash('logout', 'Logout Success!');
        return redirect('/');
    }

    public function login(){
        // return view('')
        // dd(request());
        return redirect('/', [
            'isLogin' => 0,
        ]);
    }
}
