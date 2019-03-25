<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['nome'];
    
    public function produtos(){
        return $this->hasMany(Produtos::class, 'categoria_id', 'id');
    }
}