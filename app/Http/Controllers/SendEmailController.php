<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Report23;


class SendEmailController extends Controller
{
    // public function send()
    // {
    //     $data = array('name' => 'huba huba');

    //     Mail::send(['text' => 'mail'], $data, function($message){

    //         $message->to('prq@gmail.com','Huba huba')->subject('tutorial');
    //         $message->from('xyz@gmail.com','patrick');

    //     });

    //     echo "email is sent";

    // }

    public function sendEmailBody(Request $request)
    {
        $email = $request->email;
        $group = $request->group;

        // foreach ($email as $recipient) {
        Mail::to($email)->send(new Report23($group));
        // }

        echo "email is sent";

    }
}
