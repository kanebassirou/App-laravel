<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\emails;

class MailController extends Controller
{
    //
    public function contact(){
        $emailData = [
            'title'=> 'Mail from bassirou',
            'body' => 'tester envoie de mail ',
        ];
        Mail::to('bassirou.kane@univ-thies.sn')->send(new emails($emailData));
        dd('mail envoi avec succe');
    }
}
