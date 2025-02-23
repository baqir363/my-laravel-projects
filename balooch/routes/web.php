<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\IndexController;
use App\Http\Middleware\WebGuard;
use App\Http\Kernel;

// Protected
// Route::get('/data',[IndexController::class, 'index'])->middleware('guard');
Route::get('/data',[IndexController::class, 'index']);
Route::get('/group/{group}',[IndexController::class, 'group']);

// Route::get('/group',[IndexController::class, 'group'])->middleware('guard');

// Route::middleware(['web'])->group(function(){

//     Route::get('/data',[IndexController::class, 'index']);
//     Route::get('/group',[IndexController::class, 'group']);
// });
//...........

Route::get('/login', function(){
    session()->put('user_id', 1);
    // echo "Logged in";

    return redirect('/');

});

Route::get('/logout', function(){
    session()->forget('user_id');
    // echo "Logged out";

    return redirect('/');

});

Route::get('/no-access', function(){
    echo "You're not allowed to access the page";
    die;

});

Route::get('/profile', function() {
    return "Welcome to your profile";
});


Route::get('/{lang?}', function ($lang = null) {
    App::setLocale($lang);
    return view('welcome');
});

