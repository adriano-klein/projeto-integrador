<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pedido;
use App\Produtos;
use App\PedidoProduto;

class ValidacaoController extends Controller
{
    public function validaTransacao(Request $request)
    {
        $id = $request->input('id');
        $pedido = Pedido::find($id);
        $pedido->status = 'PA';
        $salvou = $pedido->save();
        $cursos = PedidoProduto::where('pedido_id', '=', $id)->get();
        foreach($cursos as $curso) {
            $item = PedidoProduto::find($curso['id']);
            $item->status = 'PA';
            $salvou = $item->save();
        }

        return response()->json($salvou, 200);

    }
}
