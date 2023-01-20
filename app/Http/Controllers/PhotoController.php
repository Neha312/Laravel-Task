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

    //one to many-polymorphic
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

    //one ot one -polymorphic
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

    //function of  addPhoto into Image
    public function addPhoto1()
    {
        $photo = Photo::create(['name' => 'neha']);
        // $photo->name = 'my photo';
        // $photo = $photo->save();


        // $photo = [$photo->id];

        $img = new Image(['body' => 'Photo']);
        $img = $photo->image()->save($img);
    }
    //many to many-polimorphic usinh postman
    public function photoTag(Request $request)
    {
        $photo = Photo::create(['name' => $request->name]);
        $tag = Tag::create(['name' => $request->tag_name]);
        $tagnew = $photo->tags()->save($tag);

        //  post-man example
        return response()->json([
            'message' => 'Successfully Done',
            'status' => 200,
            'tag'    =>  $tag,
            'tagnew' => $tagnew,
            'photo' => $photo,
        ]);
    }
}
