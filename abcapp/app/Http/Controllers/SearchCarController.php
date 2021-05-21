<?php

namespace App\Http\Controllers;

use App\Clients\CarJam;
use Illuminate\Http\Request;

class SearchCarController extends Controller
{
    public function search(Request $request)
    {

        $plate = $request->get('plate');
        
        if (isset($plate)){
        $car = CarJam::search($plate);
        }
        else{
            $car = [];
        }
        //return $car;
        
        $plate1 = $request->get('plate1');
        
        if (isset($plate1)){
        $car1 = CarJam::search($plate1);
        }
        else{
            $car1 = [];
        }
        //return $car;
        
        return view('car')->with(['car' => $car , 'car1' => $car1]);
          
        
    }
}
