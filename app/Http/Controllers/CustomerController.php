<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use App\Models\Customer;
use App\Models\Review;
use Illuminate\Http\Request;




class CustomerController extends Controller
{

    public function list()
    {
        //hasOne()-relationship
        //restrict field
        // $data = Customer::with('mobile')->select('id')->get();
        // return  view('customer', compact(['data']));

        //get all data in hasOne-relation
        // $data = Customer::with('mobile')->get();
        // return  view('customer', compact(['data']));

        //insert data from controller
        // $mobile = Mobile::create(['model' => 'LG101']);
        // $customer = Customer::create(['name' => 'Neha', 'email' => 'neha@gmail.com']);

        // $customer->save();
        // $customer->mobile()->save($mobile);

        //belongTo()-relation
        // $ans = Mobile::with('customer')->get();
        // return  view('customer', compact(['ans']));

        //belongTo()-relation
        // $result = Review::with('customer')->get();
        // return  view('customer', compact(['result']));

        //get all data in hasOne-relation
        $result = Customer::with('review')->get();
        return  view('customer', compact(['result']));
        //dd($result);
    }
}
