@extends('layouts.main')


@section('estilos')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
@endsection


@section('titulo', 'Eventos')


@section('conteudo')

<div class="container p-3">

    <div class="card mb-3">
        <div class="card-header">
            Eventos
        </div>
        <div class="card-body">

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Cidade</th>
                        <th>Privado</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($eventos as $evento)
                    <tr>
                        <td>{{ $evento->id}}</td>
                        <td>{{ $evento->titulo}}</td>
                        <td>{{ $evento->descricao}}</td>
                        <td>{{ $evento->cidade}}</td>
                        @if ( $evento->privado )
                        <td>Sim</td>
                        @else
                        <td>Não</td>
                        @endif
                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Cidade</th>
                        <th>Privado</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>

    <div class="mb-3">
        <a href="/eventos/create" class="btn btn-primary btn-lg btn-block">Criar Evento</a>
    </div>

</div>



@endsection


@section('scripts')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>


<script>
    $(document).ready(function() {
    
        $('#example').dataTable( {
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
            }
        } );

    } );
</script>

@endsection