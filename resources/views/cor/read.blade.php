<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Cores</title>
</head>

<body>

  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>#</tr>
        <tr>Cor</tr>
      </thead>
      <tbody>
        @foreach($cor as $c)
        <tr>
          <td>{{$c->id}}</td>
          <td>{{$c->cor}}</td>
          <td><a class="btn btn-warning" href="">Edit</a></td>
          <td><a class="btn btn-danger" data-bs-toggle="modal" href="">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a class="btn btn-primary" href="{{route('registrar_cor')}}">Cadastrar</a>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>

</html>