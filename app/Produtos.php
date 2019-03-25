<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categorias;

class Produtos extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['nome','descricacao','valor','categoria_id','url_imagem','descricao_longa','link_produto'];

    public function categorias(){
        return $this->hasOne(Categorias::class, 'id', 'categoria_id'); 
    }

    public function pedidos(){
        return $this->hasMany(Pedidos::class,'pedido_id', 'id');
    }
}
