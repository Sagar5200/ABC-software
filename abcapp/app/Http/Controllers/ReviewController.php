<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public static function review()
    {
        return view('reviewpage');
    }
}
