<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/profile', function () {
    return view('about');
});

Route::get('/detail/{unit:slug}', [HomeController::class, 'show']);

Route::get('/order', [OrderController::class, 'index']);

Route::post('/order', [OrderController::class, 'store']);

Route::get('/order/{unit:slug}', [OrderController::class, 'unitValue']);

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/testimony', function () {
    return view(('testimony'));
});

// Admin
Route::get('/add-promo', function () {
    return view('admin.add_promo');
});

Route::get('/add-unit', function () {
    return view('admin.add_unit');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/all-unit', [AdminController::class, 'index']);

Route::get('/blank', function () {
    return view('admin.blank');
});

Route::get('/buttons', function () {
    return view('admin.buttons');
});

Route::get('/cards', function () {
    return view('admin.cards');
});

Route::get('/charts', function () {
    return view('admin.charts');
});

Route::get('/feedback', function () {
    return view('admin.feedback');
});

Route::get('/forgot-password', function () {
    return view('admin.forgot_password');
});

Route::get('/home-admin', function () {
    return view('admin.home_admin');
});

Route::get('/tables-admin', function () {
    return view('admin.tables_admin');
});

Route::get('/transaction', function () {
    return view('admin.transaction');
});

Route::get('/utilities-animation', function () {
    return view('admin.utilities-animation');
});

Route::get('/utilities-border', function () {
    return view('admin.utilities-border');
});

Route::get('/utilities-color', function () {
    return view('admin.utilities-color');
});

Route::get('/utilities-other', function () {
    return view('admin.utilities-other');
});
