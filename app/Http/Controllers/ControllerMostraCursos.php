<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMostraCursos extends Controller
{
    public function cursos (){
       return view('cursos');
    }
}
