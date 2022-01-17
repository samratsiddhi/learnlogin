<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trycontroller extends Controller
{
    public function call_loginpage()
    {
        return Logincontroller::displayloginpage();
    }

}
