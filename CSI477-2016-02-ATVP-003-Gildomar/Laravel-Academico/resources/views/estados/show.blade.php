@extends('layout.master')

@section('conteudo')

      <h1>Exibir estado</h1>
      <hr>
      <form method="post" action="/estados/{{ $estado->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        
        <div class="col-sm-6">
          <div class="well">
            <span style="font-weight: bold">Nome:</span> {{ $estado->nome }} <br>
          </div>
          <div class="well">
            <span style="font-weight: bold">Sigla:</span> {{ $estado->sigla }} <br>
          </div>
          <br>
          <div class="col-sm-6 col-sm-offset-3">
            
            <a href="/estados/{{ $estado->id }}/edit" class="btn btn-primary">Editar</a>

            <input type="submit" class="btn btn-danger" value="Excluir"/>

            <a href="/estados" class="btn btn-default">Voltar</a>
          </div>
        </div>

      </form>

@endsection
