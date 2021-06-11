<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Cadastro - Veiculo</title>
</head>

<body>

  <div class="container">
    <form action="{{ route('registrar_veiculo') }}" method="POST">
    @csrf
      <legend>Cadastro de Veiculo</legend>

      <div class="mb-3">
        <label for="formFile" class="form-label"></label>
        <input class="form-control" type="file" id="formFile">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label"></label>
        <input type="text" id="disabledTextInput" class="form-control" placeholder="Modelo">
      </div>

      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Ano do modelo">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Ano da fabricação">
        </div>
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label"></label>
        <input type="number" id="disabledTextInput" class="form-control" placeholder="Valor">
      </div>

      <div class="col-auto">
        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
        <select class="form-select" id="autoSizingSelect">
          <option value="Sedan">Sedan</option>
          <option value="Picape">Picape</option>
          <option value="SUV">SUV</option>
          <option value="Cupês">Cupês</option>
          <option value="Conversívei">Conversívei</option>
          <option value="Station wagons">Station wagons</option>
          <option value="Minivans">Minivans</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label"></label>
        <input type="text" id="disabledTextInput" class="form-control" placeholder="Modelo">
      </div>

      <div class="col-auto">
        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
        <select class="form-select" id="autoSizingSelect">
        <option class="Disabled">Selecione a cor...</option>
        </select>
      </div><br>

      <div class="col-auto">
        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
        <select class="form-select" id="autoSizingSelect">
        <option class="Disabled">Selecione a marca...</option>
        </select>
      </div><br>

      <div class="col-auto">
        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
        <select class="form-select" id="autoSizingSelect">
          <option class="Disabled">Selecione o usuario...</option>
        </select>
      </div><br>

      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>

</html>