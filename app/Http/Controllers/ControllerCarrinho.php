<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Pedido;
use App\Produtos;
use App\PedidoProduto;

class ControllerCarrinho extends Controller
{
    function __construct()
        {
            $this->middleware('auth');
        }  

    public function carrinho ()
    {
        $pedidos = Pedido::where([
            'status' => 'RE',
            'user_id' => Auth::id()
        ])->get();

        return view('carrinho', compact('pedidos'));
    }

    public function adicionar()
    {
        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idproduto = $req->input('id');


        $produto = Produtos::find($idproduto);

        if(empty($produto->id)){
            $req->session()->flash('mensagem-falha','Produto não encontrado em nossa loja');
        }
        
        $idusuario = Auth::id();

        $idpedido = Pedido::consultaId([
            'user_id' => $idusuario,
            'status' => 'RE'
        ]);


        if(empty($idpedido)){
            $pedido_novo = Pedido::create([
                'user_id' => $idusuario,
                'status' => 'RE'
            ]);
            $idpedido = $pedido_novo->id;
        }

       

        PedidoProduto::create([
            'pedido_id' => $idpedido,
            'produto_id' => $idproduto,
            'status' => 'RE',
            'valor' => $produto->valor,
        ]);

        $req->session()->flash('mensagem-sucesso', 'Produto adicionado ao carrinho com sucesso!');
        return redirect('carrinho');
    }

    public function remover()
    {
        $this->middleware('VerifyCsrfToken');
        $req = Request();
        
        $idpedido = $req->input('pedido_id');
        $idproduto = $req->input('produto_id');
        $remove_apenas_item = (boolean)$req->input('item');
        $idusuario = Auth::id();

        $idpedido = Pedido::consultaId([
            'id' => $idpedido,
            'user_id' => $idusuario,
            'status' => 'RE'
        ]);

        if(empty($idpedido))
        {
            $req->session()->flash('mensagem-falha','Pedido não encontrado');
            return redirect('/carrinho');
        }

        $where_produto = [
            'pedido_id' => $idpedido,
            'produto_id' => $idproduto
        ];

        $produto = PedidoProduto::where($where_produto)->orderby('id','desc')->first();

        if(empty($produto->id))
        {
            $req->session()->flash('mensagem-falha','Produto não encontrado no carrinho');
            return redirect('/carrinho');
        }
        if($remove_apenas_item)
        {
            $where_produto['id'] = $produto->id;
        }
        PedidoProduto::where($where_produto)->delete();

        $check_pedido = PedidoProduto::where([
            'pedido_id' => $produto->pedido_id
        ])->exists();

        if (!$check_pedido) {
            Pedido::where([
                'id' => $produto->pedido_id
            ])->delete();
        }
        $req->session()->flash('mensagem-sucesso','Produto removido do carrinho com sucesso!');
        return redirect('/carrinho');
    }
}