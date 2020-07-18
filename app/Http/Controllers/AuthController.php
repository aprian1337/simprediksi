<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{

    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
       if(Auth::attempt($request->only('username', 'password'))){
           return redirect()->intended('mainpage')->with('success', 'Login berhasil');
       }else{
           return redirect()->back()->with('failed', 'Username atau password salah');
       }
    }

    public function logout(){
        Auth::logout();
        return redirect()->intended('/');
    }
}
