<?php

use App\Http\Controllers\PesananController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
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
    return view('restoran/dashboard/dashboard');
});

Route::get('/login', function () {
    return view('restoran/login/login');
});

Route::get('/registrasi', function () {
    return view('restoran/login/registrasi');
});

Route::resource('/user',UserController::class);
Route::resource('/menu',MenuController::class);

Route::get('/dashboard', function () {
    return view('restoran/dashboard/dashboard');
});

Route::resource('/pesanan', PesananController::class);