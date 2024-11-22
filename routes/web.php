<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('landingpage');
});
Route::get('/dashboard', function () {
    return view('home');
});
Route::get('/loginn', function () {
    return view('auth/login');
});

Route::get('login', [AuthController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('login', [AuthController::class, 'authenticate']);
