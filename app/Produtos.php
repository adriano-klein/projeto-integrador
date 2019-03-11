<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['nome','descricacao','valor','categoria_id'];

    public function categorias(){
        return $this->hasOne(Categorias::class, 'produto_id', 'id'); 
    }

    public function pedidos(){
        return $this->hasMany(Pedidos::class,'pedido_id', 'id');
    }
}
