<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Artical;

class ArticalConntroller extends Controller
{
    public function artical()
    {
        $articals = Artical::get();
        return view('artical', compact('articals'));
    }
    public function softDelete($id)
    {
        Artical::find($id)->delete();
        return back();
    }
    public function trashed()
    {
        $articals = Artical::onlyTrashed()->get();
        return view('trashed', compact('articals'));
    }
    public function restore($id)
    {
        Artical::whereId($id)->restore();
        return back();
    }
    public function restoreAll()
    {
        Artical::onlyTrashed()->restore();
        return back();
    }
    public function hardDelete($id)
    {
        Artical::find($id)->forcedelete();
        return back();
    }
    //    public function index()
    //     {
    //         foreach (Artical::Where('id' < '10')->cursor() as $articals) {
    //             echo $articals;
    //         }
    //         exit();
    //         return view('artical', compact('articals'));
    //     }
}
