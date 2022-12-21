<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Product extends Controller
{
    //controller group Route
    function productlist()
    {
        return "Product list";
    }
    public function addproduct($id)
    {
        //return view('Home.send');
        return "The Product Id:" . $id;
    }
    function updateproduct()
    {
        return "Update the Product";
    }

    //Data passing in controller
    public function display()
    {
        return view('hello', ['name1' => 'Neha', 'name2' => 'Rakhee', 'name3' => 'Akanshya']);
    }

    //Data passing in View
    public function display1()
    {
        return view('contact', ['name1' => 'Deep', 'name2' => 'Ravi', 'name3' => 'Manav']);
    }

    public function display2($id)
    {
        return view('about')->with('id', $id);
    }

    public function display4($name)
    {
        return view('about', compact('name'));
    }

    public function bladex()
    {
        return view('about');
    }

    public function display3($id, $name = 'Aman')
    {
        // $name = 'rahul';
        return view('about', compact(['id', 'name']));
    }

    public function checkAge($age)
    {
        if ($age >= 18) {
            return view('checkAge', compact('age'));
        } else {
            return "<h1>Not Eligible<h1>";
        }
    }
}
