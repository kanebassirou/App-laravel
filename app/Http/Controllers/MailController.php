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
        Mail::to('kaneb@gmail.com')->send(new emails($emailData));
        dd('mail envoi avec succe');
    }
}
