@extends('layout.master')

@section('conteudo')

        <h1>Inserir disciplina</h1>
        <hr>
        <form method="post" action="/disciplinas">

          {{ csrf_field() }}
          
          <div class="col-sm-6">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome" />
            </div>

            <div class="form-group">
              <label for="codigo">Código</label>
              <input type="text" class="form-control" name="codigo" />
            </div>

            <div class="form-group">
              <label for="carga">Carga Horária</label>
              <input type="text" class="form-control" name="carga" />
            </div>
  
            <div class="col-sm-6">
              <input type="submit" value="Salvar" class="btn btn-block btn-primary btn-lg"/>
            </div>
            <div class="col-sm-6">
              <a href="/disciplinas" class="btn btn-default btn-block btn-lg">Voltar</a>
            </div>
            
          </div>
        </form>
@endsection
