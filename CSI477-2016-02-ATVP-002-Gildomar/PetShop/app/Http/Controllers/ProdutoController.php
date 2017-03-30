<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\User;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipousuario = User::tipo();
        $produtos = Produto::all();

        if($tipousuario == 2 || $tipousuario == 3){
            return view('admin.produtos.index')->with('produtos', $produtos);
        }

        else{
            return view('cliente.produtos.index')->with('produtos', $produtos);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produtos.create');
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
            'nome' => 'required|max:255',
            'preco' => 'required',
            'imagem' => 'required',
        ));

        $produto = new Produto;

        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->imagem = "asdasdas";

        $produto->save();

        //Session::flash('success', 'Novo produto cadastrado!');

        return redirect()->route('admin.produto.show', $produto->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $produto = Produto::find($id);
        $tipousuario = User::tipo();

        if($tipousuario == 0 || $tipousuario == 1){
            return view('produtos.show')->with('produto', $produto);
        }

        else{
            return view('admin.produtos.show')->with('produto', $produto);
        } 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('admin.produtos.edit')->with('produto',$produto);
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
        $produto = PRODUTO::find($id);
                                                        // Erro quando altera cria outro. Fazer um if para nao criar outro quando os campos sao iguais
        $this->validate($request, array(
            'nome' => 'required|max:255',
            'preco' => 'required',
            'imagem' => 'required',
        ));

        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');
        $produto->imagem = $request->input('imagem');

        $produto->save();

        //Session::flash('success', 'O produto foi atualizado!');

        return redirect()->route('admin.produtos.show', $produto->id);
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
