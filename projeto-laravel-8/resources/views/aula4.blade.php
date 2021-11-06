<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Aula 4</title>
</head>

<body>

  <div class="container p-3">

    <h1>Diretivas do blade</h1>

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

  </div>

  <!-- Comentário HTML - APARECE NO CÓDIGO FONTE DA PÁGINA -->
  {{-- Comentário Blade - NÃO APARECE NO CÓDIGO FONTE DA PÁGINA --}}


  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>