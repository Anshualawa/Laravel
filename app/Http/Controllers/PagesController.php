<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        $title = "About Us Page from Controller";
        $body = "This is my about us Page";
        return view('pages.about', compact('title', 'body'));

    }
    public function users($id, $cop)
    {
        $name = "Pappu Alawa - " . $id . " COP - " . $cop;
        return view('pages.users', compact('name'));
    }
}

