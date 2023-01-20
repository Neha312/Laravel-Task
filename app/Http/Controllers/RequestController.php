<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function practice(Request $request)
    {
        //Request Path of application using-path()
        //dd($request->path());

        //request url
        //dd($request->url());
        //dd($request->fullUrl());

        //request method
        //dd($request->method());

        //request method using a condition
        // if ($request->isMethod('POST')) {
        //     dd('Yes it is GET Method');
        // } else {
        //     dd('Yes it is POST Method');
        // }

        //Request Header
        //dd($request->header('X-Header-Name', 'default'));
        // if ($request->hasHeader('X-Header-Name')) {
        //     dd('header Present');
        // }

        //Rquest Token
        // dd($request->bearerToken());

        //Request IP -address
        //dd($request->IP());

        //request acceptable contant type
        //dd($request->getAcceptableContentTypes());
        // if ($request->accepts(['text/html', 'application/json'])) {
        //     dd('True');
        // }

        //request querystring
        //dd($request->query('name', 'Neha'));


        return view('pagination');
    }
    /*parameter Request */
    public function index(Request $request, $id)
    {
        dd($id);
        return view('pagination');
    }
    /*Inspecting request Path */
    public function check(Request $request)
    {
        if ($request->is('admin/*')) {
            dd('Admin Area');
        } else {
            dd('Guest Area');
        }
    }
}
