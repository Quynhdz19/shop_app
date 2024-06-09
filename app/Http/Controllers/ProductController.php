<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProduct($request){

        $result=DB::table('Product')->get();
        return $result;
    }

}
