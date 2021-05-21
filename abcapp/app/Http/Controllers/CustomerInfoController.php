<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerInfoController extends Controller
{
    public static function customerinfo()
    {
        return view('customerinfo');
    }
}
