<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Report23;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

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
        $bodyemail = $request->bodyemail;
        $filename = Carbon::now()->format("Y-m-d").".png";
        $arraypush = array();

        foreach($email as $emailpush){
            array_push($arraypush, $emailpush);
        }








        Mail::to($arraypush)->send(new Report23($group, $filename, $bodyemail));


        echo "email is sent";


        File::delete($filename);

    }
}
