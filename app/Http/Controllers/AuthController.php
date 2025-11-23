<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
     $credentials = $request->only('email', 'password');
     
     if(Auth::attempt($credentials)){
        $user = Auth::user();

        if($user->role == 'admin'){
            return redirect()->route('admin.dashboard');
        }

        if($user->role == 'kasir'){
            return redirect()->route('kasir.dashboard');
        }
        return redirect()->route('login')->with('error', 'Role tidak dikenal');
        }
    return back()->with('error', 'Email atau password salah!');
    }

    public function showLogin(){
        return view('login');
    }
}
