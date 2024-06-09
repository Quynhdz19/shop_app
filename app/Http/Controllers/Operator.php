<?php
namespace App\Http\Controllers;
class Operator
{
    //method trong oop
    public function tinh_trung_binh($a, $b)
    {
        return( $a + $b) / 2;

    }

    public function tru($a, $b)
    {
        return $a - $b;

    }

    public function nhan($a, $b)
    {
        return $a * $b;

    }

    public function chia($a, $b)
    {
        return $a / $b;
    }


}
