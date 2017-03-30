@extends('admin/main')

@section('titulo', 'Edição de Produtos')

@section('content')

<div class="row">

    <div class="col-md-6 col-md-offset-3">
    <!-- general form elements -->

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">{{ $produto->nome}}</h3>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <form  method="POST" action="{{ route('produtos.update', $produto->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <div class="box-body">
                    <div class="form-group">
                        <label name="nome">Nome:</label>
                        <textarea type="text" class="form-control" id="nome" name="nome" rows="1" style="resize:none;">{{ $produto->nome }}</textarea>
                    </div>

                    <div class="form-group">
                        <label name="preco">Preco(R$):</label>
                        <textarea type="text" class="form-control" id="preco" name="preco" rows="1" style="resize:none;">{{ $produto->preco }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="imagem">Imagem</label>
                        <textarea type="text" class="form-control" id="imagem" name="imagem" rows="1" style="resize:none;">{{ $produto->imagem }}</textarea>
                        {{-- <input type="file" id="imagem"> --}}
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <input type="submit" value="Criar Produto" class="btn btn-success btn-lg btn-block">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">

                </div>
            </form>
        </div>
        <!-- /.box -->
    </div>

</div>

@stop