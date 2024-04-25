<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('users', UserController::class)->except('index','create','store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
