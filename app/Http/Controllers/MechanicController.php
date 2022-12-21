<?php

namespace App\Http\Controllers;

use APP\Models\Bike;
use APP\Models\Owner;
use App\Models\Mechanic;
use Illuminate\Http\Request;


class MechanicController extends Controller
{
    public function show()
    {
        $result = Mechanic::with('owner')->get();
        //dd($result);
        return  view('customer', compact(['result']));
        // dd($result);
    }

    public function show1()
    {
        // $result = Mechanic::with('bike')->get();
        // return  view('customer', compact(['result']));
        //dd($result);
    }
}
