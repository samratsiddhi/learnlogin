<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public static function displayloginpage()
    {
        return view('index');
    }
    public function displaylogin()
    {
        return Logincontroller::displayloginpage();

    }
}
