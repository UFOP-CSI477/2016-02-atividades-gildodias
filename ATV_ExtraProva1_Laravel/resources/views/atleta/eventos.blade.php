@extends('main')

@section('titulo', 'Registros')

@section('content')

    <div class="row">

        <div class="col-md-10">
            <h1>Suas Registros</h1>
        </div>

        <div class="col-md-2">
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#ModalNovoRegistro">Inscreva-se</button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Evento</th>
                    <th>Data</th>
                    <th>Pago</th>
                </thead>

                <tbody>
                    @foreach ($registros as $registro)

                        <tr>
                            <td>{{ $registro->id }}</td>
                            <td>{{ $registro->evento->nome }}</td>
                            <td>{{ $registro->data }}</td>
                            <td>{{ ($registro->pago) ? 'Pago' : 'Pendente' }} </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

    <div class="modal fade" id="ModalNovoRegistro" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    <h4 class="modal-title" id="favoritesModalLabel">Nova Inscrição</h4>
                </div>

                <form method="POST" action="{{ route('registros.store') }}">
                    <div class="modal-body">                                     
                        <div class="form-group">
                            <label name="data">Evento</label>
                            <select class="form-control" name="evento_id">
                                @foreach($eventos as $evento)                               
                                    <option value='{{ $evento->id }}'>{{ $evento->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label name="data">Data de pagamento (dd/mm/aaaa):</label>
                            <input id="data" name="data" class="form-control">
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="hidden" name="pago" value="0">
                                    <input type="checkbox" name="pago" value="1"> Pago
                                </label>
                            </div>
                        </div>

                        
                        {{-- <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Mantenha-me conectado --}}
                                    


                    </div>

                <div class="modal-footer">
                    <span class="pull-right">
                        <input type="submit" value="Concluir" class="btn btn-success">
                        <input type="hidden" name="atleta_id" value="{{ Auth::id() }}">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">              
                        <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>                               
                    </span>
                </div>
                </form>
            </div>
        </div>
    </div>
 

@stop