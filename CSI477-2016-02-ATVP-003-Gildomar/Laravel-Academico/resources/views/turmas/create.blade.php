@extends('layout.master')

@section('conteudo')

	<h1>Inserir Turma</h1>
    <hr>
	<form action="/turmas" method="post">
	{{ csrf_field() }}

		<div class="col-sm-6">
			<div class="form-group">
	          <label for="nome">Nome</label>
	          <input type="text" class="form-control" name="nome" />
	        </div>
			<div class="form-group">
				<label for="disciplina_id">Disciplina</label>
				<select name="disciplina_id" class="form-control">
					@foreach($disciplinas as $d)
						<option value="{{$d->id}}">{{$d->codigo}}-{{$d->nome}}</option>
					@endforeach
				</select>
			</div>
			
			<div class="col-sm-6">
              <input type="submit" value="Salvar" class="btn btn-block btn-primary btn-lg"/>
            </div>
            <div class="col-sm-6">
              <a href="/turmas" class="btn btn-default btn-block btn-lg">Voltar</a>
            </div>
		</div>
	</form>
		

@endsection