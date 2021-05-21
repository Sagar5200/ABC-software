<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB as FacadesDB;

class DataRetriveController extends Controller
{
    public function index() {
        $customer = FacadesDB::select('select mvt, date, customer_name, cust_email from customerinfo');
        // $users = DB::select('select  from customerinfo');
        return view('confirmation',['customer'=>$customer]);
     }
}
