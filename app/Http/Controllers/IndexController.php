<?php

namespace App\Http\Controllers;
use App\Produtos;
use App\Categorias;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index')
        ->with('cursos', Produtos::all())
        ->with('categorias', Categorias::all());
    }
}
