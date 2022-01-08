<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicles;

class VehiclesController extends Controller
{

    public function show(Vehicles $vehicles)
    {
        $vehicles = $vehicles::all();
        return view( 'vehicles.listing',[
            'vechicles'=>$vehicles
        ]);
    }

}