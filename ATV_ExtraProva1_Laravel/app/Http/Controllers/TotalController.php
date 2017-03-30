<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;
use App\Evento;
use App\user;
use Session;
use Auth;
use DB;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();

        if(Auth::check()){
            $registros = Registro::all()->where('atleta_id','=', Auth::id());          
            
            return view('atleta.eventos')->with('registros', $registros)->with('eventos', $eventos);
            }
        
        else{
            $registros = Registro::orderBy('data', 'desc')->get();

            return view('admin.registros')->with('registros', $registros)->with('eventos', $eventos);
        }

        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registros = Registros::all();
        return view('registros.create')->with('registros', $registros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'atleta_id' => 'required',
            'evento_id' => 'required',
            'data' => 'required|max:10',
            'pago' => 'required',
        ));

        $registro = new Registro;
     
        $registro->atleta_id = $request->atleta_id;
        $registro->evento_id = $request->evento_id;
        $registro->data = $request->data;
        $registro->pago = $request->pago;
        $registro->save();

        Session::flash('success', 'Novo evento cadastrado!');

        return redirect()->route('registros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
