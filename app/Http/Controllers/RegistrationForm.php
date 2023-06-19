<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationForm extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function login()
    {
        return view('login');
    }
    public function _login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );
        echo "<pre>";
        print_r($request->all());
    }
    public function register(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required'
            ]
        );
        echo "<pre>";
        print_r($request->all());
    }
}