@extends('admin.main')

@section('titulo', 'Produtos')

@section('content')


<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                {{-- <h3 class="box-title">Produtos</h3> --}}

                <div class="col-md-offset-10">
                    <a href="{{ route('produtos.create') }}" class="btn btn-md btn-block btn-primary btn-h1-espacinho">Novo Produto</a>
                </div>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Menu</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($produtos as $produto)

                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->nome}}</td>
                            <td>{{ $produto->preco }}</td>
                            <td>
                                <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-bg-primary btn-success">Imagem</a>
                                <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-bg-primary btn-warning">Editar</a>
                                <a href="{{ route('produtos.destroy', $produto->id) }}" class="btn btn-bg-primary btn-danger">Apagar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>               
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

@stop

@section('scriptLocal')

<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

@stop