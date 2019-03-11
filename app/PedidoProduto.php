<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PedidoProduto extends Model
{
    protected $fillable = [
        'pedido_id',
        'produto_id',
        'valor',
        'status'
    ];
    

    public function produto()
    {
        return $this->belongsTo('App\Produtos','produto_id','id');
    }
}
