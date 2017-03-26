@extends('layout.master')

@section('conteudo')

      <h1>Exibir turma</h1>
      <hr>
      <form method="post" action="/turmas/{{ $turma->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        
        <div class="col-sm-6">
          <div class="well">
            <span style="font-weight: bold">Nome:</span> {{ $turma->nome }} <br>
          </div>
          <div class="well">
            <span style="font-weight: bold">Disciplina:</span> {{ $turma->Disciplina->nome }} <br>
          </div>
          
          <br>
          <div class="col-sm-6 col-sm-offset-3">
            
            <a href="/turmas/{{ $turma->id }}/edit" class="btn btn-primary">Editar</a>

            <input type="submit" class="btn btn-danger" value="Excluir"/>

            <a href="/turmas" class="btn btn-default">Voltar</a>
          </div>
        </div>

      </form>

@endsection
