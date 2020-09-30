<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function view(){
        return view('contact');
    }

    public function post()
    {
        //validator for the email
        request()->validate(['email' => 'required|email']);

        Mail::raw('It works!', function($message){
            $message->to(request('email'))
                    ->subject('Hello There');
        });

        return redirect('/contact')
            ->with('message', 'Email sent!');
    }
}
