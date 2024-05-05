<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//router cua user
Route::prefix('user')->group (function(){
    Route::get('register',function(){
       return view('user.authentication.register') ;
    });
    Route::post('register',[\App\Http\Controllers\Usercontroller::class,'userRegister']);
});
