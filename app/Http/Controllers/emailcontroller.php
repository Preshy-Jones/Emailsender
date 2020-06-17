<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class emailcontroller extends Controller
{
    public  function email(Request $request){
        $email = $request->json()->all();
        $details = [
//            'title'=> 'Preshy Jones Rocks',
            'body'=> $email['body'],
            'sub' => $email['subject'],
        ]
    
        \Mail::to($email['to'])->send(new\App\Mail\TestMail($details));
        echo "email has been sent";
    }
}
