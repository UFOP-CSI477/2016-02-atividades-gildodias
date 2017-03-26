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
      <h1 align="right">Disciplinas</h1>
    </div>
    <div class="col-sm-2 vcenter">
      <a href="/disciplinas/create" class="btn btn-block btn-lg btn-primary">Inserir</a>    
    </div>
  </div>
  <hr>
  <div class="col-sm-10 col-sm-offset-1">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Código</th>
        <th>Carga Horária</th>
      </tr>
    </thead>
    <tbody>
      @foreach($disciplinas as $d)
        <td><a href="/disciplinas/{{ $d->id }}">{{ $d->nome }}</a></td>
        <td>{{ $d->codigo}}</td>
        <td>{{ $d->carga}}</td></tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
