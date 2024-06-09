<?php

namespace App\Http\Controllers;

use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{
    public function userRegister(Request $request)
    {
        $checkRegister = false;
        $username = $request->username;
        $email = $request->email;
        $address = $request->address;
        $phone = $request->phonenumber;
        $password = $request->password;
        $repeatpassword = $request->passwordrepeated;

        $validate = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phonenumber' => 'required',
            'password' => 'required',
            'passwordrepeated' => 'required',
        ],
            [
                'username.required' => 'Ten dang nhap phai duoc nhap',
                'email.required' => 'Email phai duoc nhap',
                'address.required' => 'Dia chi phai duoc nhap',
                'phonenumber.required' => 'So dien thoai phai duoc nhap',
                'password.required' => 'Mat khau phai duoc nhap',
                'passwordrepeated.required' => 'Mat khau phai duoc nhap',
            ]
        );

        $checkUser = DB::table('User')->where('email', '=', $email);
        if ($checkUser->exists()) {
           return redirect()->to('user/register')->with(['status' => 'email da ton tai']);
        } else {
             DB::table('User')->insert([
                'username' => $username,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'password' => Hash::make($password),
                'typeuse' => 1,

            ]);
           return redirect()->to('user/login')->with(['status' => 'register success']);
        }

//        if ($checkRegister) {
//            redirect('user/login')->with(['status' => 'register success']);
//        } else {
//            redirect('user/register')->with(['status' => 'register error']);
//        }
    }



    public function login(Request $request)
    {
        $email = $request->email;
        $password=$request->password;
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],
            [
            'email.required' => 'Ten dang nhap phai duoc nhap',
                'password.required' => 'Mat khau phai duoc nhap',
        ]);
        $userDB=DB::table('User')->where('email', '=', $email)->get();
//        if(Hash::check($password, $userDB->password)){
//            return redirect()->to('/');
//        }
        if(Hash::check($password, $userDB[0]->password)){
            return redirect()->to('/');
        }else{
        return redirect()->to('user/login');}
    }

    public function loginApi()
    {
        return 'day la api login';

    }
}
