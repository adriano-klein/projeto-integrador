<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Pedido;
use App\Produtos;

class ControllerMostraCursosFull extends Controller
{
    public function validaCurso($id) {
        $cursosAp = Pedido::where([
            'status' => 'PA',
            'user_id' => Auth::id()
        ])->get();
        $varCurso = [];
        foreach($cursosAp as $curso) {
            $item = DB::table('pedido_produtos')->where('pedido_id', '=', $curso['id'])->get();
            $varCurso[] = $item;

        }

            $check = false;
            $list = [];

         foreach($varCurso as $product){
            $item = json_decode($product, true);
            $pedidoid = $item[0]["produto_id"];
            $list[] = $pedidoid;    
            }

        foreach ($list as $it) {
            $intid = intval($id); 
            if ($it === $intid) {
                $check = true;
            }
        }

        $cursofind = Produtos::find($id);
        $rota = $cursofind->rota;

        $produtos = Produtos::find($id);
        $valorDesconto = $produtos->valor*0.8;
       
        if($check) {
            return view($rota)
            ->with('produtos', $produtos)
            ->with('valorDesconto', $valorDesconto);
        } else {
            return redirect('home');
        }
        
    }
}
