<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return view ('home');
    }
    public function tentang()
    {
        return view ('about');
    }

    public function resume()
    {
        return view ('resume');
    }


}
