<?php

namespace Smylmrz\Demo\Http\Controllers;

use App\Http\Controllers\Controller;

class DemoController extends Controller {

    public function index()
    {
        return view('demo::index');
    }

}