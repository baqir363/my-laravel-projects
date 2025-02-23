<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/user',[HomeController::class,'home']);

route::get('/adminpage',[HomeController::class,'page'])->middleware(['auth','admin']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('/home',[HomeController::class,'index']);

route::post('/add_post',[HomeController::class,'add_post']);

route::get('/view_post',[HomeController::class,'view_post']);

route::get('/edit_post/{id}',[HomeController::class,'edit_post']);

route::post('/update_post/{id}',[HomeController::class,'update_post']);

route::get('/delete_post/{id}',[HomeController::class,'delete_post']);

route::get('my_search',[HomeController::class,'my_search']);

route::get('admin/dashboard',[HomeController::class,'admin'])->middleware(['auth','admin']);
