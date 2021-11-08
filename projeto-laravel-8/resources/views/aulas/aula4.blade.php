@extends('layouts.main')


@section('estilos')
<link rel="stylesheet" href="/css/styles.css">
@endsection


@section('titulo', 'Aula 4')


@section('conteudo')

<div class="container p-3">

  <h1 class="h1-vermelho mb-3">Diretivas do blade</h1>

  <div class="card text-white bg-dark mb-3">
    <div class="card-header">
      Exibir variável passada pela VIEW
    </div>
    <div class="card-body">
      <p class="card-text">Nome: {{ $nome }} </p>
      <p class="card-text">Idade: {{ $idade }} </p>
      <p class="card-text">Elemento de origem: {{ $elementos[3] }} </p>
      <p class="card-text">Elementos dominados:
        @foreach ($elementos as $elemento)
        {{$elemento}},
        @endforeach </p>
      <a href="/" class="btn btn-primary">Home</a>
    </div>
  </div>

  <div class="card text-white bg-dark mb-3">
    <div class="card-header">
      Exemplo IF
    </div>
    <div class="card-body">

      @if ( $nome == "Pedro" )
      <p class="card-text">Condição verdadeira. O nome é Pedro</p>
      @elseif ($nome == "Maria")
      <p class="card-text">Condição verdadeira. O nome é Maria</p>
      @else
      <p class="card-text">A condição é falsa. O nome é {{ $nome }}</p>
      @endif

    </div>
  </div>

  <div class="card text-white bg-dark mb-3">
    <div class="card-header">
      FOR
    </div>
    <div class="card-body">
      @for ($i = 0; $i < count($elementos); $i++) <p class="card-text"> {{ $elementos[$i] }}</p>
        @endfor
    </div>
  </div>

  <div class="card text-white bg-dark mb-3">
    <div class="card-header">
      Imprimindo PHP diretamente
    </div>
    <div class="card-body">
      @php
      $varNome = "João";
      echo $varNome;
      @endphp
    </div>
  </div>

  <div class="card text-white bg-dark mb-3">
    <div class="card-header">
      Imprimindo imagem salva na pasta img
    </div>
    <div class="card-body">
      <img src="/img/Daenerys.jpg" class="img-fluid" alt="Imagem">
    </div>
  </div>

</div>

<!-- Comentário HTML - APARECE NO CÓDIGO FONTE DA PÁGINA -->
{{-- Comentário Blade - NÃO APARECE NO CÓDIGO FONTE DA PÁGINA --}}

@endsection


@section('scripts')
<script src="/js/scripts.js"></script>
@endsection