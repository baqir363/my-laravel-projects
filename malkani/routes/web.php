<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


route::get('/home',[HomeController::class,'index']);

route::get('/adminpage',[HomeController::class,'page'])->middleware(['auth','admin']);


route::get('/download',[HomeController::class,'export']);
