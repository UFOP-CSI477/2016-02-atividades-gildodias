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
		  <h1 align="right">Cidades</h1>
    </div>
    <div class="col-sm-2 vcenter">
    	<a href="/cidades/create" class="btn btn-block btn-lg btn-primary">Inserir</a>
    </div>
  </div>
  <hr>
  <div class="col-sm-10 col-sm-offset-1">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
          @foreach($cidades as $c)
            <td>{{ $c->id}}</td>
            <td><a href="/cidades/{{ $c->id }}">{{ $c->nome }}</a></td>
            <td>{{ $c->Estado->nome}}</td></tr>
          @endforeach
        </tbody>
      </table>
	</div>
@endsection
