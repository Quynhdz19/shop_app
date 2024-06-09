<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function getAllEmail()
    {
        $allEmail = DB::table('User')->get();
        return $allEmail;
    }

    public function registerUser($request){

        return $request;
        $useName = $request->username;
        $email = $request->email;
        $password = $request->password;
        $address = $request->address;
        $phone = $request->phone;

        DB::table('User')->insert(
            [
                'username' => $useName,
                'email' => $email,
                'password' => $password,
                'address' => $address,
                'phone' => $phone
            ]
        );
    }
}
