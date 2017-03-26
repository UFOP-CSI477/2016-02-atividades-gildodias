<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use App\Disciplina;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = Turma::all();
        return view('turmas.index')->with('turmas', $turmas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disciplinas = Disciplina::all();
        return view('turmas.create')
            ->with('disciplinas', $disciplinas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Turma::create($request->all());
        session()->flash('info', 'Turma inserida com sucesso!');
        return redirect('/turmas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turma = turma::find($id);
        return view('turmas.show')
          ->with('turma',$turma);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turma = turma::find($id);
        $disciplinas = Disciplina::all();
        return view('turmas.edit')
            ->with('turma',$turma)
            ->with('disciplinas', $disciplinas);
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
        $turma = Turma::find($id);

        $turma->nome = $request->nome;
        $turma->disciplina_id = $request->disciplina_id;
        $turma->save();

        return redirect('/turmas');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Turma::destroy($id);
        return redirect('/turmas');
    }
}
