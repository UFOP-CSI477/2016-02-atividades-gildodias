<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AtletaController extends Controller
{
    public function index()
    {
        $atletas = User::orderBy('nome', 'asc')->get();
        return view('admin.atletas')->with('atletas', $atletas);
    }
}
