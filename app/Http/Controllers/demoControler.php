<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoControler extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
    public function developer()
    {
        return view('developer');
    }
}