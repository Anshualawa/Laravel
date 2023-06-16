<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('frontend');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/nav-bar', function () {
    return view(('nav-bar'));
});

Route::get('/tv-shows', function () {
    return view('tv-shows');
});

Route::any('/test', function () {
    echo 'Testing the route';
});
// POST Method 

Route::post('/test', function () {
    echo 'Testing the route';
});

Route::get('/demo/{name}/{id?}', function ($name, $id = null) {
    $data = compact('name', 'id');
    return view('demo')->with($data);
});