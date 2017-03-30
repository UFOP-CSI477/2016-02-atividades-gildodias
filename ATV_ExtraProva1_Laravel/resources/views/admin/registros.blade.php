@extends('main')

@section('titulo', 'Registros')

@section('content')

    <div class="row">

        <div class="col-md-10">
            <h1>Administração de Registros</h1>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Atleta</th>
                    <th>Evento</th>
                    <th>Data</th>
                    <th>Pago</th>
                </thead>

                <tbody>
                    @foreach ($registros as $registro)

                        <tr>
                            <td>{{ $registro->id }}</td>
                            <td>{{ $registro->atleta->name }}</td>
                            <td>{{ $registro->evento->nome }}</td>
                            <td>{{ $registro->data }}</td>
                            <td>{{ ($registro->pago) ? 'Pago' : 'Pendente' }} </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

@stop