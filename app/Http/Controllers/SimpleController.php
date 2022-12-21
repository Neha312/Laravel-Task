<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Simple;
use SebastianBergmann\Type\SimpleType;

class SimpleController extends Controller
{


    // public function show(Request $request)
    // {

    //     return [1, 2, 3, $request->input('name')];
    // }

    //collection-Eloquent ORM
    public function index()
    {
        // $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);

        //1.Show all data in result-all() of collection
        //$data = $collection->all();

        //2.show total of array in collection-avg()
        //$data = $collection->avg();

        //chunk ()-make chunck of collection element
        //$data = $collection->chunk(3);
        //$data = $collection->chunk(2)->all();

        //reverse()-reverse element
        //$data = $collection->reverse();

        //map()-callback each data and show result
        // $data = $collection->map(function ($item, $key) {
        //     return $item + 2;
        // });

        //using dd -debuging
        // dd($collection);
        //using view-blade file
        // return view('welcome', ['data' => $data]);
        //return view('welcome', ['collection' => $collection]);


    }
}
