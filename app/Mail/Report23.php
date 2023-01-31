<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Spatie\Browsershot\Browsershot;
use Carbon\Carbon;

class Report23 extends Mailable
{
    use Queueable, SerializesModels;
protected $group;
public $filename;
public $bodyemail;
public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($group, $filename, $bodyemail, $subject)
    {
        $this->group = $group;
        $this->filename = $filename;
        $this->bodyemail = $bodyemail;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Browsershot::url("http://localhost/example-app/public/report?group={$this->group}")->windowSize(1300, 480)
                                                                                           ->save($this->filename);

        // $file = \Storage::path("C:\xampp1\htdocs\example-app\public\gambar.png");
       return $this->from('ict.no-reply@cpp.co.id')
                   ->view('mail')
                   ->subject($this->subject)
                   ->with(
                    [
                        'image' =>  Browsershot::url("http://localhost/example-app/public/report?group={$this->group}")->screenshot()

                    ]);

                //  ->attach($file);



    }
}


// public function callCommandSync(Request $request)
//     {

//         $id = $request->id;
//         $token = $request->token;
//         $attempt = $request->attempt;

//         $domain = env('APP_URL');
//         sleep(5);

//         // curl --insecure -G -d "p_tipe=SUBMIT&p_docid=IDCA5d415812a16ed&p_docyear=2019"  "https:/ebank.cpp.co.id:8443/eap_send_email_idca.php"
//         // $path = _DIR_ . "/eap_send_email_idca.php '&p_tipe=" . $tipe . "&p_docid=" . $docid . "&p_docyear=" . $docyear . "' > /dev/null& ";
//         // $paths = "/opt/lampp/bin/php " . $path;
//         $command = 'curl --insecure -G -d ';
//         $param   = ' "id=' . $id . '&token='.urlencode($token).'&attempt=' . $attempt . '" ';


//         $host    = ' "' . $domain . '/api/execute_sync"';

//         /*
//         if ( config('app.env_os') == 'WIN' ){
//           $host    = ' "' . $domain . '/execute_submit_jobs" > nul 2>&1  ';
//         }else{
//             $host    = ' "' . $domain . '/execute_submit_jobs" > /dev/null & ';
//         }
//         */

//         if (substr(php_uname(), 0, 7) == "Windows") {
//             pclose(popen("start /B " . $command . $param . $host, "r"));
//         } else {
//             exec($command . $param . $host . " > /dev/null &");
//         }
//         echo "executed";
//     }
