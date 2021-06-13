<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Marcas</title>
</head>

<body>

  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>Marca</tr>
      </thead>
      <tbody>
        @foreach($marca as $m)
        <tr>
          <td>{{$m->marca}}</td>
          <td><a class="btn btn-warning" href="{{route('editarm', ['id' => $m->id])}}">Editar</a></td>
          <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Deletar
            </button></td>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Atenção!</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('excluir_marca', ['id' => $m->id])}}" method="POST">
                <div class="modal-body">
                  Tem certeza que deseja excluir essa marca ?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Sim</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a class="btn btn-primary" href="{{route('registrar_marca')}}">Cadastrar</a>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>

</html>