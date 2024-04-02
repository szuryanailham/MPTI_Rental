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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/order', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
});




