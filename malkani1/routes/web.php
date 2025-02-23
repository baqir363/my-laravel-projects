<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleeActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/practice/{name?}', function($name =null){
    $demo = "<h2>Malkani</h2>";
    $data = compact('name','demo');
    return view('practice')->with($data);
});

Route::any('/test', function(){
    echo "Testing the route";
});

Route::get('/home',[DemoController::class, 'index']);

Route::get('/about', 'App\Http\Controllers\DemoController@about');

Route::get('/course', SingleeActionController::class);

Route::resource('/photo', PhotoController::class);

Route::get('/register',[RegistrationController::class, 'index']);

Route::post('/register',[RegistrationController::class, 'register']);





Route::get('/nav', function () {
    return view('index');
});







Route::group(['prefix'=>'/customer'],function() {
    Route::get('create', [CustomerController::class, 'create'])->name('customer.create');
    Route::get('delete/{id}',[CustomerController::class, 'delete'])->name('customer.delete');
    Route::get('force-delete/{id}',[CustomerController::class, 'forceDelete'])->name('customer.force-delete');
    Route::get('restore/{id}',[CustomerController::class, 'restore'])->name('customer.restore');
    Route::get('edit/{id}',[CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('update/{id}',[CustomerController::class, 'update'])->name('customer.update');
    Route::post('/', [CustomerController::class, 'store']);

    Route::get('/', [CustomerController::class, 'view']);

    Route::get('/trash', [CustomerController::class, 'trash']);

});


Route::get('get-all-session', function ()
{
    $session = session()->all();
    p($session);
});

Route::get('set-session', function (Request $request)
{
    $request->session()->put('user_name', 'Malkani');
    $request->session()->put('user_id', '123');
    // $request->session()->flash('status', 'Success');
    return redirect('get-all-session');

});

Route::get('destroy-session', function () {
    session()->forget(['user_name', 'user_id']);
    // session()->forget('user_id');
    return redirect('get-all-session');
});
// Route::put('users/{id}', function($id) {
// });

// Rout::patch();

// Route::delete('users/{id}', function($id) {
// });
