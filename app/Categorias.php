<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';
    
    public function produtos(){
        return $this->hasOne(Produtos::class, 'categoria_id', 'id');
    }
}