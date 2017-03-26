@extends('layout.master')

@section('conteudo')

      <h1>Exibir aluno</h1>
      <hr>
      <form method="post" action="/alunos/{{ $aluno->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        
        <div class="row">
		    <div class="col-sm-4">
		      <div class="well">
		        <span style="font-weight: bold">Nome:</span> {{ $aluno->nome }} <br>
		      </div>
		      <div class="well">
		        <span style="font-weight: bold">Rua:</span> {{ $aluno->rua }} <br>
		      </div>
			  <div class="well">
		        <span style="font-weight: bold">Número:</span> {{ $aluno->numero }} <br>
		      </div>
			</div>
			<div class="col-sm-4">
		      <div class="well">
		        <span style="font-weight: bold">Bairro:</span> {{ $aluno->bairro }} <br>
		      </div>
		      <div class="well">
		        <span style="font-weight: bold">Cep:</span> {{ $aluno->cep }} <br>
		      </div>
		      <div class="well">
		        <span style="font-weight: bold">Email:</span> {{ $aluno->mail }} <br>
		      </div>
		    </div>
		    <div class="col-sm-4">
		      <div class="well">
		        <span style="font-weight: bold">Cidade:</span> {{ $aluno->Cidade->nome }} <br>
		      </div>
			</div>
        </div>


		<br>
		<div class="col-sm-6 col-sm-offset-3">

			<a href="/alunos/{{ $aluno->id }}/edit" class="btn btn-primary">Editar</a>

			<input type="submit" class="btn btn-danger" value="Excluir"/>

			<a href="/alunos" class="btn btn-default">Voltar</a>
		</div>
        

      </form>

@endsection
