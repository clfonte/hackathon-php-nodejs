<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Requireds meta tags  -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('icon.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Usuários - Editar</title>

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
        <form action="{{ route('editar_usuario', ['id' => $usuario->id]) }}" method="POST">
            {{-- LINHA 1 --}}
            @csrf
            <h3 class="mt-3 text-info">Editar Usuário</h3>
            <div class="col-12 col-md-8 mt-3">
                <label for="nome">
                    <b>Nome</b>
                </label>
                <input type="text" id="nome" name="nome" value="{{ $usuario->nome }}" class="form-control" alt="Nome"
                    required data-parsley-required-message="Usuário não pode ficar em branco"
                    placeholder="Informe o nome do usuário...">
            </div>

            {{-- LINHA  2 --}}
            <div class="col-12 col-md-8 mt-3">
                <label for="login">
                    <b>Login</b>
                </label>
                <input type="text" id="login" name="login" value="{{ $usuario->login }}" class="form-control"
                    alt="Login" required data-parsley-required-message="Login não pode ficar em branco"
                    placeholder="Informe o login do usuário...">
            </div>

            {{-- LINHA 3 --}}
            <div class="col-12 col-md-8 mt-3">
                <label for="senha">
                    <b>Senha</b> (Caso desejar continuar com a mesma senha não há necessidade de alterar)
                </label>
                <input type="password" id="senha" name="senha" class="form-control" value="{{ $usuario->senha }}"
                    alt="Senha" required data-parsley-required-message="Senha não pode ficar em branco"
                    placeholder="Informe a senha do usuário...">
            </div>

            <button type="submit" class="btn btn-outline-info mt-3">Salvar</button>

            <a class="btn btn-outline-danger mt-3" href="/usuario/listar">Cancelar</a>
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>

</html>
