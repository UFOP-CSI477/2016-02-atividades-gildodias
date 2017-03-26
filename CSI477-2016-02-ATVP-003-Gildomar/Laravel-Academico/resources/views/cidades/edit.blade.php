@extends('layout.master')

@section('conteudo')

      <h1>Editar cidade</h1>
	  <hr>
      <form method="post" action="/cidades/{{ $cidade->id }}">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}

		<div class="col-sm-6">
	        <div class="well">
	        	<div class="row">
	        		<div class="col-sm-2">
	        			<span class="col-sm-6" style="font-weight: bold">Nome:</span>		
	        		</div>
	        		<div class="col-sm-10">
	        			<input class="form-control" type="text" name="nome" value="{{ $cidade->nome }}" />
	        		</div>
	             
	        	</div>
	        </div>

	        <div class="well">
	        	<div class="row">
	        		<div class="col-sm-2">
	            		<span style="font-weight: bold">Estado:</span> 
					</div>
					<div class="col-sm-10">
	            		<div class="form-group">
							<select name="estado_id" class="form-control">
								@foreach($estados as $e)
									<option value="{{$e->id}}">{{$e->nome}}-{{$e->sigla}}</option>
								@endforeach
							</select>
						</div>
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
