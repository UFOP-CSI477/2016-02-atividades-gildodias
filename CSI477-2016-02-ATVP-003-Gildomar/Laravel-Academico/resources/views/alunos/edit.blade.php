@extends('layout.master')

@section('conteudo')

      <h1>Editar aluno</h1>
	  <hr>
      <form method="post" action="/alunos/{{ $aluno->id }}">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}


		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
		          <label for="nome">Nome</label>
		          <input type="text" class="form-control" name="nome" value="{{ $aluno->nome }}" />
		        </div>
				<div class="form-group">
		          <label for="rua">Rua</label>
		          <input type="text" class="form-control" name="rua" value="{{ $aluno->rua }}" />
		        </div>
		        <div class="form-group">
		          <label for="numero">Número</label>
		          <input type="text" class="form-control" name="numero" value="{{ $aluno->numero }}" />
		        </div>
			</div>
			<div class="col-sm-4">	        
		        <div class="form-group">
		          <label for="bairro">Bairro</label>
		          <input type="text" class="form-control" name="bairro" value="{{ $aluno->bairro}}" />
		        </div>
		        <div class="form-group">
		          <label for="cep">Cep</label>
		          <input type="text" class="form-control" name="cep" maxlength="8" value="{{ $aluno->cep}}" />
		        </div>
				<div class="form-group">
		          <label for="mail">Email</label>
		          <input type="text" class="form-control" name="mail" value="{{ $aluno->mail}}" />
		        </div>
			
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="cidade_id">Cidade</label>
					<select name="cidade_id" class="form-control">
						@foreach($cidades as $c)
							<option value="{{$c->id}}">{{$c->nome}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
		<hr>    
		<div class="col-sm-6 col-sm-offset-3">
        	<input class="btn btn-primary btn-lg btn-block" type="submit" value="Salvar"/>    
        	<br><br>
        </div>

        
      </form>

@endsection
