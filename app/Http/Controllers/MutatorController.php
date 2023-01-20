<?php

namespace App\Http\Controllers;

use App\Models\Mutator;
// use App\Enums\StatusEnum;
use App\Enum\StatusEnum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MutatorController extends Controller
{
    //Accessor

    public function index()
    {

        return Mutator::all();
        // $accessor = Mutator::where('id', '=', 2)->get();
        // return $accessor;
    }

    //
    public function show()
    {
        $mutator = new Mutator;
        $mutator->first_name = "Dax";
        $mutator->last_name = "shah";
        $mutator->city = "Bardoli";
        $mutator->is_active = 1;
        $mutator->created_at = '2023-01-03 01:03:23';
        $mutator->status = 'active';
        $mutator->save();

        // dd(StatusEnum::Active->value);
        // $input = [
        //     'first_name' => 'Gold',
        //     'last_name' => 'This is a Gold',
        //     'city' => 'Bharuch',
        //     'is_active' => 0,
        //     'created_at' => '2023-01-03 01:03:23',
        //     'status' => 'active'
        // ];
        // $mutator = Mutator::create($input);
        // dd($mutator->status, $mutator->status->value);
    }

    public function json()
    {
        $jsonData = '[{"id":15,"first_name":"Neha","last_name":"Vasava","city":"Bharuch"},
        {"id":16,"first_name":"Rakhi","last_name":"Singh","city":"Vapi"},
        {"id":17,"first_name":"Akansha","last_name":"Thakur","city":"Baroda"}]';
        $data = json_decode($jsonData, true);
        dd($data);
    }
}
