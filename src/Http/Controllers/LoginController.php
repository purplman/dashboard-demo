<?php

namespace Smylmrz\Demo\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    protected $redirectTo = '/';

    public function index()
    {
        return view('demo::login');
    }

    public function login(Request $request) 
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember') ? true : false;

        if(Auth::attempt($credentials, $remember)){
            return redirect($this->redirectTo);
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }

}