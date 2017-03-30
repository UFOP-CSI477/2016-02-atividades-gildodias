@extends('guest.main')

@section('titulo', 'Detalhes do produto')

@section('content')


<div class="row">

    <div class="col-md-4 col-md-offset-4">

    <!-- Profile Image -->
    <div class="box box-primary">
        <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="iMAGEM DO PRODUTO">

            <h3 class="profile-username text-center">{{ $produto->nome }}</h3>

            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b>Preço:</b> <a class="pull-right">R${{ $produto->preco }}</a>
                </li>     
            </ul>

            <div class="row">
                <div class="col-sm-6">
                    <a href="{{ route('produtos.index', $produto->id) }}" class="btn btn-block btn-primary btn-warning">Comprar</a>
                </div>

                <div class="col-sm-6">
                    <a href="{{ url('/') }}" class="btn btn-block btn-bg-primary btn-primary">Voltar</a>        
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection