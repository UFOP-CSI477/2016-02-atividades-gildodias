@extends('layout.master')

@section('conteudo')

      <h1>Exibir cidade</h1>
      <hr>
      <form method="post" action="/cidades/{{ $cidade->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        
        <div class="col-sm-6">
          <div class="well">
            <span style="font-weight: bold">Nome:</span> {{ $cidade->nome }} <br>
          </div>
          <div class="well">
            <span style="font-weight: bold">Estado:</span> {{ $cidade->Estado->nome }} <br>
          </div>
          <br>
          <div class="col-sm-6 col-sm-offset-3">
            
            <a href="/cidades/{{ $cidade->id }}/edit" class="btn btn-primary">Editar</a>

            <input type="submit" class="btn btn-danger" value="Excluir"/>

            <a href="/cidades" class="btn btn-default">Voltar</a>
          </div>
        </div>

      </form>

@endsection
