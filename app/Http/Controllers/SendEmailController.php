<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Report23;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class SendEmailController extends Controller
{


    public function sendEmailBody(Request $request)
    {
        $email = $request->email;
        $group = $request->group;
        $bodyemail = $request->bodyemail;
        $subject = $request->subject;
        $uom = $request->uom;
        $filename = Carbon::now()->format("Y-m-d").".png";
        $arraypush = array();





        foreach($email as $emailpush){
            array_push($arraypush, $emailpush);
        }








        Mail::to($arraypush)->send(new Report23($group, $filename, $bodyemail, $subject, $uom));


        echo "email is sent";


        File::delete($filename);

    }
}
