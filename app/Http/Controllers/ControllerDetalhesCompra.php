<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedido;

class ControllerDetalhesCompra extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }  

    public function detalhes_compra($id){
        $cursosAp = Pedido::where([
            'status' => 'PA',
            'user_id' => Auth::id(),
            'id' => $id
        ])->get();
        
        return view('detalhes_compra', compact('cursosAp'));
     }
}
