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
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Menu</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a href="{{ route('categorias.index') }}" class="nav-link active">Categorias</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('clientes.index') }}" class="nav-link active">Clientes</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('produtos.index') }}" class="nav-link active">Produtos</a>
                  </li>
                  <li class="nav-item">
                    <a href="/" class="nav-link active">Home</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <h1>{{$title}}</h1>
        {{$slot}}
    </div>
</body>
</html>