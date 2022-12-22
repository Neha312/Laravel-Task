<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function showPerson()
    {
        // $data = Photo::with('comments')->get();
        // dd($data);
        //return  view('customer', compact(['data']));

        $person = Person::with('image')->get()->toArray();
        dd($person);

        //find data using id
        // $photo = Photo::find($id);
        // return $photo;
    }
    public function addPerson()
    {
        $photo = Person::create(['name' => 'abc']);
        // $photo->name = 'my photo';
        // $photo = $photo->save();
        // $photo = [$photo->id];

        $img = new Image(['body' => 'Persone']);
        $img = $photo->image()->save($img);
    }
}
