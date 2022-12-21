<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\Mechanic;
use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function show2()
    {
        // $owner = Mechanic::find()->bike->owner;
        // return $owner;

        $result = Owner::with('bike')->get();
        return  view('customer', compact(['result']));
        // dd($result);
    }
}
