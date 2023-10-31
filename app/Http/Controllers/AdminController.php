<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view("admin.auth.login");
    }

    // autektikasi login user
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('portfolio')->withSuccess('Kamu berhasil Login!');
        }
        return back()->withErrors([
            'email'=> 'Kredensial yang dimasukkan tidak valid'
        ]);
    }

    // logout dari table admin
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('Berhasil Logout');
    }
}
