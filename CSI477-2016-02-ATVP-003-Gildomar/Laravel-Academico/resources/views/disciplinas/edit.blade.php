@extends('layout.master')

@section('conteudo')

      <h1>Editar disciplina</h1>
	  <hr>
      <form method="post" action="/disciplinas/{{ $disciplina->id }}">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}

		<div class="col-sm-6">
	        <div class="well">
	        	<div class="row">
	        		<div class="col-sm-2">
	        			<span class="col-sm-6" style="font-weight: bold">Nome:</span>		
	        		</div>
	        		<div class="col-sm-10">
	        			<input class="form-control" type="text" name="nome" value="{{ $disciplina->nome }}" />		
	        		</div>
	             
	        	</div>
	        </div>

	        <div class="well">
	        	<div class="row">
	        		<div class="col-sm-2">
	            		<span style="font-weight: bold">Código:</span> 
					</div>
					<div class="col-sm-10">
	            		<input class="form-control" type="text" name="codigo" value="{{ $disciplina->codigo }}" />
	            	</div>
	            </div>
	        </div>
	        <div class="well">
	        	<div class="row">
	        		<div class="col-sm-3">
	            		<span style="font-weight: bold">Carga Horária:</span>
					</div>
					<div class="col-sm-9">
	            		 <input class="form-control" type="text" name="carga" value="{{ $disciplina->carga }}" />
	            	</div>
	            </div>	
			</div>

			<div class="col-sm-6 col-sm-offset-3">
	        	<input class="btn btn-primary btn-lg btn-block" type="submit" value="Salvar"/>    
	        	<br><br>
	        </div>

        </div>
      </form>

@endsection
