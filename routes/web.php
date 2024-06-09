<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
//router cua user
Route::prefix('user')->group (function(){
    Route::get('login', function () {
        return view('user.authentication.login');
    });

    Route::post('login',  [\App\Http\Controllers\Usercontroller::class, 'login']);

    Route::get('register',function(){
       return view('user.authentication.register') ;
    });
    Route::post('register',[\App\Http\Controllers\Usercontroller::class,'userRegister']);
});


Route::get('email', function () {
   return view('admin.emailUser');
});

Route::get('register', function () {
    return view('admin.register');
});
