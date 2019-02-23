<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Http\Controllers\Controller;

class ControllerContato extends Controller
{
    public function contato(){
        return view('contato');
     }

    public function enviarEmail(Request $request){
        Mail::send('emails.contato',
        [
           'name_contact' => $request->input('name_contact'),
           'lastname_contact' => $request->input('lastname_contact'),
           'email_contact' => $request->input('email_contact'),
           'phone_contact' => $request->input('phone_contact'),
           'message_contact' => $request->input('message_contact')
        ], function($message) use ($request){
            $message->from('contato@evolution.com.br');
            $message->to('contato@evolution.com.br');
            $message->subject($request->input('name_contact'));
        });
        return redirect('contato');
    }
}