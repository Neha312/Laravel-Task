<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Singer;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;

class SongController extends Controller
{
    public function addSong()
    {
        $song = new Song();
        $song->title = 'Pal';
        $song->save();
    }
    public function show3()
    {
        $data = Singer::with('song')->get()->toArray();
        dd($data);
        //return  view('customer', compact(['data']));
    }
}
