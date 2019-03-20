<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedido;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    // Retorna os cursos comprados pelo cliente
    $cursosAp = Pedido::where([
        'status' => 'RE',
        'user_id' => Auth::id()
    ])->get();

    return view('home', compact('cursosAp'));
    }


}
