<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermAgreementController extends Controller
{
    public static function termsagreement()
    {
        return view("terms-agreement");
    }
}

