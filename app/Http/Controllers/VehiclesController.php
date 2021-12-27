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

    public function create()
    {
        return view('vehicles.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required',
            'is_agidrive' => 'required'
        ]);

        $vehicle = new Vehicles([
            'name'        => $request->name,
            'is_agidrive' => $request->is_agidrive
        ]);

        $vehicle->save();
        return back()->with('success', 'Vehicle added');

    }


}