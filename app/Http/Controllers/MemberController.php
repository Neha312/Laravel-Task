<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    //Query Buider
    function dbOperation()
    {
        return DB::table('posts')->get();
    }
}
