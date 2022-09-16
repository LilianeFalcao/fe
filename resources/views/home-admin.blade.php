<!doctype html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/admin/estilo.css') }}">
    <title>Álbum</title>
    <style>
        body { padding: 20px; }
        .navbar { margin-bottom: 20px; }
        :root { --jumbotron-padding-y: 10px; }
        .jumbotron {
          padding-top: var(--jumbotron-padding-y);
          padding-bottom: var(--jumbotron-padding-y);
          margin-bottom: 0;
          background-color: #fff;
        }
        @media (min-width: 768px) {
          .jumbotron {
            padding-top: calc(var(--jumbotron-padding-y) * 2);
            padding-bottom: calc(var(--jumbotron-padding-y) * 2);
          }
        }
        .jumbotron p:last-child { margin-bottom: 0; }
        .jumbotron-heading { font-weight: 300; }
        .jumbotron .container { max-width: 40rem; }
        .btn-card { margin: 4px; }
        .btn { margin-right: 5px; }
        footer { padding-top: 3rem; padding-bottom: 3rem; }
        footer p { margin-bottom: .25rem; }
    </style>
</head>
<body>

    <header>
      <div class="navbar navbar-dark bg-dark shadow-sm">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Cadastro de filmes</strong>
          </a>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Escreva aqui seu novo Post</h1>
          <form method="POST" action="/" enctype="multipart/form-data">
            @csrf
            <div class="form-group text-left">
              <label for="email">Endereço de e-mail</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="nome@dominio.com">
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="arquivo" name="arquivo">
              <label class="custom-file-label" id="RotuloArquivo" for="arquivo">Escolha um arquivo</label>
            </div>
            <div class="form-group text-left">
              <label for="mensagem">Sua mensagem</label>
              <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
            </div>
            <p>
              <button type="submit" class="btn btn-primary my-2">Enviar</button>
              <button type="reset" class="btn btn-secondary my-2">Cancelar</button>
            </p>
          </form>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
        <a href="">voltar</a>

        </p>
      </div>
    </footer>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
      $("#arquivo").blur(function(){
          var nomeCompleto = document.getElementById('arquivo').value;
          var nome = nomeCompleto.split("\\").pop();
          $("#RotuloArquivo").text(nomeCompleto);
      });
    </script>

</body>
</html>