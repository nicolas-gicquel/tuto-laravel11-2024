<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('users', UserController::class)->except('index','create','store');
Route::resource('posts', PostController::class)->except('index');
Route::resource('comments', CommentController::class)->except('index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
