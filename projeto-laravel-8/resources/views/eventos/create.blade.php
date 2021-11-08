@extends('layouts.main')


@section('estilos')

@endsection


@section('titulo', 'Criar Evento')


@section('conteudo')

<div class="container p-3">

    <div class="card mb-3">
        <div class="card-header">
            Criar Evento
        </div>
        <div class="card-body">

            <form action="{{ route('eventos.store') }}" method="POST">

                @csrf

                <div class="form-group">
                    <label>Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título do evento">
                </div>
                <div class="form-group">
                    <label>Descrição</label>
                    <textarea class="form-control" rows="3" id="descricao" name="descricao"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Tipo do Evento</label>
                        <select id="privado" name="privado" class="form-control">
                            <option value="0" selected>Público</option>
                            <option value="1">Privado</option>
                        </select>
                    </div>
                </div>

                <div class="container mb-3 text-center">
                    <a href="{{ route('eventos.index') }}" class="btn btn-danger col-md-3">Cancelar</a>
                    <button type="reset" class="btn btn-warning col-md-3">Limpar Campos</button>
                    <button type="submit" class="btn btn-success col-md-3">Criar</button>
                </div>


            </form>

        </div>
    </div>

</div>



@endsection


@section('scripts')

@endsection