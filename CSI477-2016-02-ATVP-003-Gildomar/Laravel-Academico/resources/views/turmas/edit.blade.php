@extends('layout.master')

@section('conteudo')

      <h1>Editar turma</h1>
	  <hr>
      <form method="post" action="/turmas/{{ $turma->id }}">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}

		<div class="col-sm-6">
	        <div class="well">
	        	<div class="row">
	        		<div class="col-sm-2">
	        			<span class="col-sm-6" style="font-weight: bold">Nome:</span>		
	        		</div>
	        		<div class="col-sm-10">
	        			<input class="form-control" type="text" name="nome" value="{{ $turma->nome }}" />		
	        		</div>
	             
	        	</div>
	        </div>

            <div class="well">
	        	<div class="row">
	        		<div class="col-sm-2">
	            		<span style="font-weight: bold">Disciplina:</span> 
					</div>
					<div class="col-sm-10">
	            		<div class="form-group">
							<select name="disciplina_id" class="form-control">
								@foreach($disciplinas as $d)
									<option value="{{$d->id}}">{{$d->nome}}</option>
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
