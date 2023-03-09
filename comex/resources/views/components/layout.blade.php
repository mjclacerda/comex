<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
</head>
<body>
    <div>
      <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #4dbce4;">
        <div class="container-fluid">
          <a class="navbar-brand m-3" href="/">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0">
              <li class="nav-item">
                <a href="{{ route('categorias.index') }}" class="nav-link active">Categorias</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('clientes.index') }}" class="nav-link active">Clientes</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('produtos.index') }}" class="nav-link active">Produtos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="m-4">
        {{$slot}}
      </div>
    </div>
</body>
</html>