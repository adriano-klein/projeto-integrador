<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;

class LoginControllerAjax extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $autenticado = true;
            return response()->json($autenticado, 200);
        } else {
            $autenticado = false;
            return response()->json($autenticado, 200);
        }
    } 
}
