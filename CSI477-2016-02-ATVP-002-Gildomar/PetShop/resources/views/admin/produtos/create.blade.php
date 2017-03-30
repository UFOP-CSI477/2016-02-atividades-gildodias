@extends('admin/main')

@section('titulo', 'Cadastro de Produtos')

@section('content')

<div class="row">

    <div class="col-md-6 col-md-offset-3">
    <!-- general form elements -->

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Novo Produto</h3>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <form  method="POST" action="{{ route('produtos.store') }}">
                <div class="box-body">
                    <div class="form-group">
                        <label name="nome">Nome:</label>
                        <input id="nome" name="nome" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="preco">Preco(R$):</label>
                        <input id="preco" name="preco" class="form-control" placeholder="R$ 0,00">
                    </div>

                    <div class="form-group">
                        <label for="imagem">Imagem</label>
                        <input id="imagem" name="imagem" class="form-control">
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