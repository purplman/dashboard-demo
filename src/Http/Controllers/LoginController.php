<?php

namespace Smylmrz\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    public function index()
    {
        return view('dashboard::login');
    }

    public function login(Request $request) 
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember') ? true : false;

        if(Auth::attempt($credentials, $remember)){
            return redirect()->route('dashboard');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }

}