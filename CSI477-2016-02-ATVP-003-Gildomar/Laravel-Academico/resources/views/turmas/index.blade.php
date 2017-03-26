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
		  <h1 align="right">Turmas</h1>
    </div>
    <div class="col-sm-2 vcenter">
  		<a href="/turmas/create" class="btn btn-block btn-lg btn-primary">Inserir</a>
    </div>
  </div>
  <hr>
  <div class="col-sm-10 col-sm-offset-1">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Disciplina</th>
          </tr>
        </thead>
        <tbody>
          @foreach($turmas as $t)
            <td>{{ $t->id}}</td>
            <td><a href="/turmas/{{ $t->id }}">{{ $t->nome }}</a></td>
            <td>{{ $t->Disciplina->nome}}</td></tr> 
          @endforeach
        <tbody>
      </table>
	</div>
@endsection
