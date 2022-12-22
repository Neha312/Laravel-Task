<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singer;
use App\Models\Song;

class SingerController extends Controller
{
    public function addSinger()
    {
        $singer = new Singer();
        $singer->name = 'Shreeram';
        $singer->save();

        $songids = [5, 2];
        //$ids = Singer::find();;

        $singer->song()->attach($songids);
    }

    // public function addSinger(Request $request)
    // {
    //     $singer = Singer::findOrFail($request->singer_id);
    //     $song = Song::findOrFail($request->song_id);
    //     $singer->song()->syncWithoutDetaching($song);
    // }

    public function showSinger($id)
    {
        //dd($id);
        $singers = Song::find($id)->singer;
        return $singers;
        //dd($singers);
    }
}
