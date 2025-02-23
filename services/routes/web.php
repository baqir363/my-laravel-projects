<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ComposeController;
use App\Http\Controllers\Frontend\HistoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'home']);

Route::get('/compose', [ComposeController::class, 'index']);

Route::get('/history', [HistoryController::class, 'index']);

Route::get('/upload', function(){
    return view('upload');
});

Route::post('/upload',[ComposeController::class, 'upload']);
