<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerValidaLogin extends Controller
{
    public function validaLogin (Request $request) {
        
        $credentials = [
            'login' => $request->input('email'),
            'password' => $request->input('senha')
        ];

        if (Auth::attempt($credentials)) {
            return 'ok';
        }

        return 'login_failed';
    }
}
