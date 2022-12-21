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
        $singer->name = 'Jubin';
        $singer->save();

        $songids = [11, 10];
        $singer->song()->attach($songids);
    }
}
