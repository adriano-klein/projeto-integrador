<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCarrinho extends Controller
{
    public function carrinho (){
        return view('carrinho');
     }
}
