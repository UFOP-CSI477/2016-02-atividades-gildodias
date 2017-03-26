@extends('layout.master')

@section('conteudo')

      <h1>Exibir disciplina</h1>
      <hr>
      <form method="post" action="/disciplinas/{{ $disciplina->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        
        <div class="col-sm-6">
          <div class="well">
            <span style="font-weight: bold">Nome:</span> {{ $disciplina->nome }} <br>
          </div>
          <div class="well">
            <span style="font-weight: bold">Código:</span> {{ $disciplina->codigo }} <br>
          </div>
          <div class="well">
            <span style="font-weight: bold">Carga Horária:</span> {{ $disciplina->carga }} <br>
          </div>
          <br>
          <div class="col-sm-6 col-sm-offset-3">
            
            <a href="/disciplinas/{{ $disciplina->id }}/edit" class="btn btn-primary">Editar</a>

            <input type="submit" class="btn btn-danger" value="Excluir"/>

            <a href="/disciplinas" class="btn btn-default">Voltar</a>
          </div>
        </div>

      </form>

@endsection
