<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo 'this is Index page';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo 'this is Create page';

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo 'this is store page';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo $id . 'this is Show page';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo 'this is Edit page';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo 'this is update page';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo 'this is destroy page';
    }
}