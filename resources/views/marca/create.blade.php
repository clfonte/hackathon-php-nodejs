<!doctype html>
<html lang="en">
  <head>
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    
      <link rel="icon" href="{{asset('icon.png')}}">
    
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    
      <title>Cadastro - Marca</title>
      
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          {{-- LOGO --}}
          <nav class="navbar navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand" href="http://localhost:8000">
                <img src="{{asset('logo.png')}}" alt="" width="65" height="45">
              </a>
            </div>
          </nav>
          
          {{-- FAZ A FORMATAÇÃO DOS LINKS DA NAVBAR --}}
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
              <li class="nav-item">
                <a class="nav-link active" href="http://localhost:8000">
                  <b>Início</b>
                </a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link active" aria-current="page">
                  <b>Cadastros</b>
                </a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link active" href="http://localhost:3000"><b>Catálogo</b></a>
              </li>
            </ul>

            {{-- CAIXA DE PESQUISA --}}
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Pesquisa" aria-label="Search">
              <button class="btn btn-outline-info" type="submit">Pesquisa</button>
            </form>
        </div>
      </nav>    
  </head>

  <body>
    <div class="container">
      <form action="{{ route('registrar_marca') }}" method="POST">
        @csrf
        <h1 class="mt-3 text-info">Cadastro De Marca</h1>
            {{-- LINHA 1 --}}
            <div class="col-12 col-md-8">
              <label for="marca"><b>Marca</b></label>
              <input type="text" id="marca" name="marca" class="form-control" alt="Marca"
              required data-parsley-required-message="Marca não pode ficar em branco" placeholder="marca">
            </div>
            
            <button class="btn btn-outline-info mt-3">
              Salvar
            </button>
      </form>
    </div>
  </body>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</html>