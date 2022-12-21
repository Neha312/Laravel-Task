<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\PaymentService;

//binding in service container
class PostController extends Controller
{
    // public function index()
    // {
    //     return view('post/index');
    // }

    //function for Binding PaymentService class
    public function show(PaymentService $payment)
    {
        //using without constructor
        //$payment = new PaymentService();
        //$payment->process();

        //return Process() Value from  Paymentservice
        return $payment->process();

        //use for debuging
        //dd(app());

        //Return secret key
        //dd($payment);
    }
}
