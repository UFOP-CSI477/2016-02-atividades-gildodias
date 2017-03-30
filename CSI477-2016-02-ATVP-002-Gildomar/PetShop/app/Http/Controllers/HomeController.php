<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\User;

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
        $tipousuario = User::tipo();

        if($tipousuario == 1){
            $produtos = Produto::all();
            return view('cliente.main')->with('produtos', $produtos);
        }

        else{
            $produtos = Produto::all();
            return view('admin.main')->with('produtos', $produtos);
        }        
    }
}
