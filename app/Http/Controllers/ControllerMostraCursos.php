<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMostraCursos extends Controller
{
    public function cursos (){
       return view('cursos');
    }

    public function programacao(){
        return view('curso_programacao');
    }

    public function marketing(){
        return view('curso_marketing');
    }

    public function data_science(){
        return view('curso_data_science');
    }

    public function mentoria(){
        return view('curso_mentoria');
    }

    public function redes(){
        return view('curso_redes');
    }

    public function mobile(){
        return view('curso_mobile');
    }


}
