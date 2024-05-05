<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function userRegister(Request $request){
        $username=$request->username;
        $email=$request->email;
        $address=$request->address;
        $phone=$request->phonenumber;
        $password=$request->password;
        $repeatpassword=$request->passwordrepeated;
    }
}
