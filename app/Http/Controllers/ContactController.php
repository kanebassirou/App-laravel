<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserInfo;

class ContactController extends Controller
{
    public function create(): View
    {
        return view('contact');
    }

    public function store(Request $request): View // "View" doit commencer par une majuscule
    {
        Mail::to('administrateur@chezmoi.com')
            ->send(new UserInfo($request->except('_token')));

        return view('confirm');
    }
}
