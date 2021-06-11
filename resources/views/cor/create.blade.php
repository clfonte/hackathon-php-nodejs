<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Cadastro - Marcas</title>
</head>

<body>

  <div class="container">
    <form action="{{ route('registrar_cor') }}" method="POST">
      @csrf
      <legend>Cadastro de Cor </legend>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label"></label>
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>

</html>