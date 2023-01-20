<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\TestMail;
use App\Jobs\sendEmailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Notifications\SmsNotification;
use App\Notifications\OffersNotification;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function email()
    {
        //for notification
        // $user = User::first();
        // Notification::send($user, new WelcomeNotification);
        // dd('done ');

        //for mail
        $email = "abc@gmail.com";
        $emailData = [
            'name' => 'Neha',
            'dob' => '03/02/2001'
        ];
        Mail::to($email)->send(new TestMail($emailData));
        dd("Send");
    }

    public function sendOfferNotification($id)
    {
        $userSchema = User::findOrFail($id);

        $offerData = [
            'name' => 'NEHA',
            'body' => 'You received an offer.',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'offer_id' => 9
        ];

        Notification::send($userSchema, new OffersNotification($offerData));

        dd('Task completed!');
    }
    public function sendsmsNotification()
    {
        $user = User::first();
        $user->notify(new SmsNotification);
        return view('email.test');
    }
    public function sendJob($mail)
    {

        $email = new sendEmailJob($mail);
        $mail = $this->dispatch($email);
        dd('Send Mail Successfully..!!');
    }
}
