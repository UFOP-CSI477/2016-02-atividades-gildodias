@extends('guest.main')

@section('titulo', 'Produtos')

@section('content')


<div class="row">
     
    @foreach ($produtos as $produto)
        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="{{ $produto->imagem }}" alt="iMAGEM DO PRODUTO">

                    <h3 class="profile-username text-center">{{ $produto->nome }}</h3>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Preço:</b> <a class="pull-right">R${{ $produto->preco }}</a>
                        </li>
                    </ul>


                    <div class="row">    
                        <div class="col-md-6">
                            <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-block btn-bg-primary btn-primary btn-warning">Visualizar</a>
                            {{-- <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-bg-primary btn-warning">Editar</a> --}}
                        </div>  

                        <div class="col-md-6">
                            <a href="{{ route('produtos.index') }}" class="btn btn-block btn-bg-primary btn-primary">Comprar</a>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    @endforeach
       
</div>

@stop
