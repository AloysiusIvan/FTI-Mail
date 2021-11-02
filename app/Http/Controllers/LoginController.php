<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function postlogin (Request $request){
        if (Auth::attempt($request->only('username', 'password'))){
            return redirect('dashboard');
        }
        else{
            Alert::error('Login failed', 'Please try again.');
            return view('login');
        }
    }
    public function logout (Request $request){
        Auth::logout();
        return redirect('/');
    }
}