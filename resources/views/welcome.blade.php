<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('icon.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Index</title>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            {{-- LOGO --}}
            <nav class="navbar navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="http://localhost:8000">
                        <img src="{{ asset('logo.png') }}" alt="" width="65" height="45">
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
                    <a class="nav-link active" aria-current="page" href="http://localhost:8000/veiculo/listar">
                        <b>Veículos</b>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost:8000/cor/listar">
                        <b>Cores</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost:8000/marca/listar">
                        <b>Marcas</b>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link active" href="http://localhost:3000/index"><b>Catálogo</b></a>
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
        <h1 class="display-4">Bem-vindo, ao JPEC Concessionária</h1>
        <hr class="my-4">
        <p>Você terá acesso aos formulários de cadastros logo na barra de navegação acima! </p>
        <p>Desfrute.</p>
    </div>
    {{-- <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('listar_cor') }}">Cor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('listar_veiculo') }}">Veiculo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('listar_marca') }}">Marca</a>
    </ul> --}}

</body>
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

</html>
