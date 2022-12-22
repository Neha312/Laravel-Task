<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;

class VideoController extends Controller

{
    public function showVideo()
    {
        // $data = Video::with('comments')->get();
        // dd($data);
        //return  view('customer', compact(['data']));
        $video = Video::with('comments')->get()->toArray();
        dd($video);
    }
    public function addVideo()
    {
        //     $video = new Video();
        //     $video->title = 'Coocking Blog';
        //     $video->save();
        // $commentableid = [1, 2];
        // $photo->comments()->attach($commentableid);


        // $photo->name = 'my photo';
        // $photo = $photo->save();
        // $photo = [$photo->id];

        $video = Video::create(['title' => 'blog23']);
        $comment = new Comment(['body' => 'video Details']);
        $comment = $video->comments()->save($comment);
    }
    public function videoTag()
    {
        $video = Video::create(['title' => 'neha']);

        $tag = new Tag(['name' => 'Photo Tag']);
        $tag = $video->tags()->save($tag);
    }
}
