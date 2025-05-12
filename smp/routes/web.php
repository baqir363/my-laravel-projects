<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('user', 'App\Http\Controllers\UserController');

Route::prefix('admin')->group(function () {
    Route::resource('course', 'App\Http\Controllers\CourseController');
});
