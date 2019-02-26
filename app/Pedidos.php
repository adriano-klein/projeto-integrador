<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $table = 'pedidos';
    
    public function produtos(){
        return $this->hasMany(Produtos::class, 'produto_id', 'id');
    }

    public function usuarios(){
        return $this->hasOne(Usuarios::class, 'usuario_id', 'id');
    }

    public function categorias(){
        return $this->hasMany(Categorias::class, 'categoria_id', 'id');
    }
}
