<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationForm extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function register()
    {
        echo 'Post Method';
    }
}