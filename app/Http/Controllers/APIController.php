<?php

namespace App\Http\Controllers;

use App\Models\API;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\API  $aPI
     * @return \Illuminate\Http\Response
     */
    public function show(API $aPI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\API  $aPI
     * @return \Illuminate\Http\Response
     */
    public function edit(API $aPI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\API  $aPI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, API $aPI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\API  $aPI
     * @return \Illuminate\Http\Response
     */
    public function destroy(API $aPI)
    {
        //
    }

    public function getParameter(Request $request)
    {
        $email = $request->email;
        $group = $request->group;
        $bodyemail = $request->bodyemail;





        // $sendemail = Http::post('http://localhost/example-app/public/api/sendEmailBody', [
        //     'email' => $email,
        //     'group' => $group
        // ]);

        $emailparameter ="";
        foreach($email as $emailparam){
            $emailparameter.="email[]=".$emailparam."&";
        }



        $command = 'curl http://localhost/example-app/public/api/sendEmailBody --insecure -G -d ';
        $param   = ' "group=' . $group .'&email=' . $emailparameter . '&bodyemail='.$bodyemail . '" ';



        if (substr(php_uname(), 0, 7) == "Windows") {
                        pclose(popen("start /B " . $command . $param, "r"));
                    } else {
                        exec($command . $param . " > /dev/null &");
                    }
                    // echo ($command . $param . " > /dev/null &");
                    echo "executed";




        return $group;






    }

}
