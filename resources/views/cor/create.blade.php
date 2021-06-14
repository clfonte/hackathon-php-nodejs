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
  
    <title>Cadastro - Cor</title>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <nav class="navbar navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="http://localhost:8000">
              <img src="{{asset('logo.png')}}" alt="" width="65" height="45">
            </a>
          </div>
        </nav>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Pesquisa" aria-label="Search">
            <button class="btn btn-outline-info" type="submit">Pesquisa</button>
          </form>
        </div>
      </div>
    </nav>

</head>

<body>

  <div class="container">
    <form action="{{ route('registrar_cor') }}" method="POST">
      @csrf
      <h1 class="mt-3 text-info">Cadastro De Cor</h1>

      <div class="col-12 col-md-8">
        <label for="cor"><b>Cor</b></label>
        <input type="text" id="cor" name="cor" class="form-control" alt="Cor"
        required data-parsley-required-message="Cor não pode ficar em branco" placeholder="Cor">
      </div>

      <button type="submit" class="btn btn-outline-info mt-3">
        Salvar
      </button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>
</html>