<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoControler;
use App\Http\Controllers\singleActionController;
use App\Http\Controllers\PhotController;
use App\Http\Controllers\RegistrationForm;
use App\Models\Customers;

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

Route::get('/developer', 'App\Http\Controllers\demoControler@developer');
Route::get('/', [demoControler::class, 'index']);
Route::get('/about', 'App\Http\Controllers\demoControler@about');
Route::get('/help', singleActionController::class);
Route::resource('photo', PhotController::class);
Route::get('/login', [RegistrationForm::class, 'login']);
Route::post('/login', [RegistrationForm::class, '_login']);
Route::get('/register', [RegistrationForm::class, 'index']);
Route::post('/register', [RegistrationForm::class, 'register']);
Route::get('/customer', function () {
    $customers = Customers::all();
    echo '<pre>';
    print_r($customers->toArray());
});