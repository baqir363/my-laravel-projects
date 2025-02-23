<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SomeAddController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

route::get('/home',[HomeController::class,'index']);

route::post('/add_post',[HomeController::class,'add_post']);

route::get('/view_post',[HomeController::class,'view_post']);

route::get('/edit_post/{id}',[HomeController::class,'edit_post']);

route::post('/update_post/{id}',[HomeController::class,'update_post']);

route::get('/delete_post/{id}',[HomeController::class,'delete_post']);

route::get('/some_view',[SomeAddController::class,'index']);

route::post('/some_add',[SomeAddController::class,'store']);

route::get('/someadd_view',[SomeAddController::class,'show']);

route::get('/edit_some/{id}',[SomeAddController::class,'edit']);

route::post('/update_some/{id}',[SomeAddController::class,'update']);

route::get('/delete_some/{id}',[SomeAddController::class,'destroy']);
