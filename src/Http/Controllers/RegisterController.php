<?php

namespace Smylmrz\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller {
    
    public function index()
    {
        return view('dashboard::register');
    }

    public function register(Request $request)
    {
        User::create($request->all());
    }

}