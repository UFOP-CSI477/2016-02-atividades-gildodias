<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;
use App\Evento;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $eventos = Evento::all();
        $registros = Registro::all()->where('atleta_id','=', Auth::id());          
            
        return view('atleta.eventos')->with('registros', $registros)->with('eventos', $eventos);
    }
}
