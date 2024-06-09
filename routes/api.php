<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Operator;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Usercontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//phuong thuc https
//get
//post
//put
//delete
//Route::get("login", function () {
//
//});


Route::post("login", function () {
    $response = new Usercontroller();
    $result = $response->loginApi();
    return $result;

});

//10 20

Route::get("tinh_trung_binh", function () {

    // khởi tạo class chứa method mà mình cần dùng
    $operator = new Operator();

    // lấy kết quả của method cần dùng
    $result = $operator->tinh_trung_binh(10, 20);

    return $result;

});


Route::get("tru", function () {

    // khởi tạo class chứa method mà mình cần dùng
    $operator = new Operator();

    // lấy kết quả của method cần dùng
    $result = $operator->tru(10, 20);

    return $result;
});

Route::get('email', function () {

    $adminController = new AdminController();
    $result = $adminController->getAllEmail();

    return $result;
});

Route::post("register", function (Request $request) {

    $adminController = new AdminController();

    $result = $adminController->registerUser($request);
    return $result;
});

Route::get('product',function(Request $request){
        $productController = new ProductController();

        $result=$productController->getProduct($request);
        return $result;
});



