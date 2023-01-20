<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Photo;
use App\Models\Video;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function  showPhoto()
    {
        $img = Tag::with('photos')->get()->toArray();
        // dd($img);
        return response()->json([
            'message' => 'Successfully Done',
            'status' => 200,
            'images'    =>  $img,
        ]);
    }
    public function  showVideo()
    {
        $video = Tag::with('videos')->get()->toArray();
        //dd($video);
        return response()->json([
            'message' => 'Successfully Done',
            'status' => 200,
            'videos'    =>  $video,
        ]);
    }
    public function addTagphoto()
    {
        $photo = Photo::findOrFail(26);
        $tag2 = Tag::create(['name' => 'Photo']);


        $taggable = $photo->tags()->save($tag2);
    }
    public function addTagvideo()
    {
        $video = Video::findOrFail(17);
        $tag1 = Tag::create(['name' => 'Video']);

        $taggable = $video->tags()->save($tag1);
    }
}
