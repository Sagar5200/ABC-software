<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public static function paymentinfo()
    {
        return view("paymentinfo");
    }
}
