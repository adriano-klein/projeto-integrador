<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSobre extends Controller
{
    public function sobre (){
        return view('sobre');
     }
}
