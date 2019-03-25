<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerDetalhesCompra extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }  

    public function detalhes_compra(){
        return view('detalhes_compra');
     }
}
