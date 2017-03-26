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
			<h1 align="right">Alunos</h1>
		</div>
		<div class="col-sm-2 vcenter">
			<a href="/alunos/create" class="btn btn-block btn-lg btn-primary">Inserir</a>
		</div>
	</div>
	<hr>
    <div class="col-sm-10 col-sm-offset-1">
        <table class="table table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nome</th>
					<th>Email</th>
					<th>Cidade</th>
				</tr>
			</thead>
			<tbody>
				@foreach($alunos as $a)
					<td>{{ $a->id}}</td>
					<td><a href="/alunos/{{ $a->id }}">{{ $a->nome }}</a></td>
					<td>{{ $a->mail}}</td>
					<td>{{ $a->Cidade->nome}}</td></tr>
				@endforeach
			</tbody>
        </table>
	</div>
@endsection
