<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('/principal/index');
});

Route::get('/login', function () {
    return view('/principal/login');
});

Route::get('/registrarse', function () {
    return view('/principal/registrarse');
});