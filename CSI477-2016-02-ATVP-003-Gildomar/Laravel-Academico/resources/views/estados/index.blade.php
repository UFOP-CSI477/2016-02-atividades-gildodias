@extends('layout.master')

@section('conteudo')
  <style>
    .vcenter{
      display: inline-block;
      vertical-align: middle;
      float: none;
    }
  </style>
  <div class="row">
    <div class="col-sm-2 vcenter">
		  <h1 align="right">Estados</h1>
    </div>
    <div class="col-sm-2 vcenter">
  		<a href="/estados/create" class="btn btn-block btn-lg btn-primary">Inserir</a>
    </div>
  </div>
  <hr>
  <div class="col-sm-10 col-sm-offset-1">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Sigla</th>
          </tr>
        </thead>
        <tbody>
          @foreach($estados as $e)
            <td>{{ $e->id}}</td>
            <td><a href="/estados/{{$e->id }}">{{ $e->nome }}</a></td>
            <td>{{ $e->sigla}}</td></tr> 
          @endforeach
        </tbody>
      </table>
  </div>
@endsection
