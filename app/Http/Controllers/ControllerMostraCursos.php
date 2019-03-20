<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;

class ControllerMostraCursos extends Controller
{
    public function cursos (){
       return view('cursos');
    }

    public function programacao(){
        $produtos = Produtos::find(1);
        $valorDesconto = $produtos->valor*0.8;
        return view('curso_programacao')
        ->with('produtos', $produtos)
        ->with('valorDesconto', $valorDesconto);
        
    }

    public function marketing(){
        $produtos = Produtos::find(2);
        $valorDesconto = $produtos->valor*0.8;
        return view('curso_marketing')
        ->with('produtos', $produtos)
        ->with('valorDesconto', $valorDesconto);
    }

    public function data_science(){
        $produtos = Produtos::find(3);
        $valorDesconto = $produtos->valor*0.8;
        return view('curso_data_science')
        ->with('produtos', $produtos)
        ->with('valorDesconto', $valorDesconto);
    }

    public function mentoria(){
        $produtos = Produtos::find(5);
        $valorDesconto = $produtos->valor*0.8;
        return view('curso_mentoria')
        ->with('produtos', $produtos)
        ->with('valorDesconto', $valorDesconto);
    }

    public function redes(){
        $produtos = Produtos::find(4);
        $valorDesconto = $produtos->valor*0.8;
        return view('curso_redes')
        ->with('produtos', $produtos)
        ->with('valorDesconto', $valorDesconto);
    }

    public function mobile(){
        $produtos = Produtos::find(6);
        $valorDesconto = $produtos->valor*0.8;
        return view('curso_mobile')
        ->with('produtos', $produtos)
        ->with('valorDesconto', $valorDesconto);
    }

    public function todosCursos(){
        $todosCursos = Produtos::all();
        return view('cursos')
        ->with('cursos', $todosCursos);
    }


}
