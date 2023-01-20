<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function response()
    {
        //show response in plain content
        //return response('Hello', 200)->header('content-Type', 'Text/plain ');

        //set cookie
        // $cookie = response('Hello', 200)->cookie('name', 'neha');
        // dd($cookie);

        //expired cookie
        // $cookie = response('Hello', 200)->withoutcookie('name');
        // dd($cookie);

        //return response in blade file
        //return response()->view('pagination')->header('Content-Type', 'Text/html');

        //response in json
        return response()->json([
            'name' => 'Neha',
            'city' => 'Ankleshwar'
        ]);
    }
}
