<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    //Query Buider
    public function dbOperation()
    {
        //return DB::table('posts')->where('id', 3)->get();
        //return DB::table('posts')->find(3);
        // return DB::table('posts')->count();
        $show = DB::table('posts')->get();
        //return view('list', ['data' => $data]);
        return response()->json([
            'message' => 'Successfully Done',
            'status' => 200,
            'show'    =>  $show,
        ]);
    }
    public function dbInsert(Request $request)
    {

        $add = DB::table('posts')->insert(
            [
                'title' => 'Aman',
                'body' => 'Tiwari',

            ]
        );
        return response()->json([
            'message' => 'Successfully Done',
            'status' => 200,
            'add'    =>  $add,
        ]);
    }
    public function dbUpdate()
    {
        return DB::table('posts')->where('id', 3)->update(
            [
                'body' => 'Food Blog'
            ]
        );
    }
    public function dbDelete()
    {
        return DB::table('posts')->where('id', 3)->delete();
    }
    public function show()
    {
        // $data = DB::table('posts')->get();
        // $data = DB::table('posts')->first();
        // $data = DB::table('posts')->where('body', 'vasava')->value('title');
        // dd($data);

        //pluck in query builder
        // $data = DB::table('posts')->pluck('title', 'body');
        // dd($data);

        //chunk in query builder
        // DB::table('posts')->orderBy('id')->chunk(2, function ($datas) {
        //     echo 'chunk of Data <br>';
        //     foreach ($datas as $item) {
        //         echo $item->title;
        //         echo '<br>';
        //     }
        //     return false;
        // });

        //exists() in query builder
        // if (DB::table('posts')->where('id', 15)->exists()) {
        //     dd('Yes');
        // } else {
        //     dd('No');
        // }


        //view
        //return view('list', ['data' => $data]);
    }
}
