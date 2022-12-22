<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Photo;
use App\Models\Image;
use App\Models\Tag;
use Illuminate\Http\Request;

class PhotoController extends Controller
{

    // public function addSong()
    // {
    //     $photo = new Photo();
    //     $song->title = 'Pal';
    //     $song->save();
    // }

    //
    public function showPhoto()
    {
        // $data = Photo::with('comments')->get();
        // dd($data);
        //return  view('customer', compact(['data']));

        $photo = Photo::with('comments')->get()->toArray();
        dd($photo);

        //find data using id
        // $photo = Photo::find($id);
        // return $photo;
    }
    public function addPhoto()
    {
        $photo = Photo::create(['name' => 'neha']);
        // $photo->name = 'my photo';
        // $photo = $photo->save();


        // $photo = [$photo->id];

        $comment = new Comment(['body' => 'abc']);
        $comment = $photo->comments()->save($comment);
    }
    public function  showPhoto1()
    {
        // $data = Photo::with('comments')->get();
        // dd($data);
        //return  view('customer', compact(['data']));

        $img = Photo::with('image')->get()->toArray();
        dd($img);

        //find data using id
        // $photo = Photo::find($id);
        // return $photo;
    }
    public function addPhoto1()
    {
        $photo = Photo::create(['name' => 'neha']);
        // $photo->name = 'my photo';
        // $photo = $photo->save();


        // $photo = [$photo->id];

        $img = new Image(['body' => 'Photo']);
        $img = $photo->image()->save($img);
    }
    public function photoTag()
    {
        $photo = Photo::create(['name' => 'neha']);
        // $photo->name = 'my photo';
        // $photo = $photo->save();


        // $photo = [$photo->id];

        $tag = new Tag(['name' => 'Photo Tag']);
        $tag = $photo->tags()->save($tag);
    }
}
