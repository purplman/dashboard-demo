<?php

namespace Smylmrz\Demo\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller {
    
    public function index()
    {
        return view('demo::register');
    }

    public function register(Request $request)
    {
        User::create($request->all());
    }

}