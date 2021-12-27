<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Models\Driver;

class DriverController extends Controller
{

    public function index()
    {
        return view( 'driver');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $newUser = new User([
            'name' => $request->post('name')
        ]);
        $newUser->save();
        return back()->with('success', 'User added');
    }

}
