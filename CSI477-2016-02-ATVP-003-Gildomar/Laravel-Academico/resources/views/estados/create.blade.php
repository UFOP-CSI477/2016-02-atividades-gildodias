@extends('layout.master')

@section('conteudo')

        <h1>Inserir estado</h1>
        <hr>
        <form method="post" action="/estados">

          {{ csrf_field() }}
          
          <div class="col-sm-6">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome" />
            </div>

            <div class="form-group">
              <label for="codigo">Sigla</label>
              <input type="text" class="form-control" name="sigla" maxlength="2" />
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
