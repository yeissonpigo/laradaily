<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InfoMail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $objDemo = new \stdClass();
        $objDemo->email = $request->email;
        $objDemo->question1 = $request->question1;
        $objDemo->question2 = $request->question2;
        $objDemo->question3 = $request->question3;
 
        Mail::to([$request->email, 'yeison02101@hotmail.com'])->send(new InfoMail($objDemo));
        return "mensaje enviado";
    }
}
