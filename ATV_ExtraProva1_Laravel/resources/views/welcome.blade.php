@extends('main')

@section('titulo', 'Home')

@section('content')

    <div class="row">

        <div class="col-md-10">
            <h1>Eventos</h1>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Data</th>
                </thead>

                <tbody>
                    @foreach ($eventos as $evento)

                        <tr>
                            <td>{{ $evento->id }}</td>
                            <td>{{ $evento->nome }}</td>
                            <td>{{ $evento->preco }}</td>
                            <td>{{ $evento->data}}</td>
                        </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

@stop