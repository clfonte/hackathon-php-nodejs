<!doctype html>
<html lang="en">

<head>

    <!-- Requireds meta tags  -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('icon.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Cadastro - Veículo</title>

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
        <div class="row mb-3">
            <form action="{{ route('registrar_veiculo') }}" enctype="multipart/form-data" method="POST">
                <div class="row mb-3">
                    @csrf
                    <h1 class="mt-3 text-info">Cadastro De Veículos</h1>

                    {{-- LINHA 1 --}}
                    <div class="col-12 col-md-8">
                        <label for="modelo"><b>Modelo</b></label>
                        <input type="text" id="modelo" name="modelo" class="form-control" alt="Modelo" required
                            data-parsley-required-message="Modelo não pode ficar em branco" placeholder="Modelo">
                    </div>

                    <div class="col-12 col-md-4">
                        <label for="anoModelo"><b>Ano Modelo</b></label>
                        <input type="anoModelo" class="form-control" autocomplete="off" id="anoModelo" name="anoModelo"
                            required data-parsley-required-message="Ano modelo não pode ficar me branco"
                            placeholder="Informe o Ano do Modelo">
                    </div>

                    {{-- LINHA 2 --}}
                    <div class="col-12 col-md-4 mt-3">
                        <label for="anoFabricacao"><b>Ano de Fabricação</b></label>
                        <input type="text" class="form-control" autocomplete="off" id="anoFabricacao"
                            name="anoFabricacao" required
                            data-parsley-required-message="Ano de fabricação não pode estar em branco"
                            placeholder="Informe o ano de fabricação">
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="valor"><b>Valor</b></label>
                        <input type="text" class="form-control" autocomplete="off" id="valor" name="valor" required
                            data-parsley-required-message="Valor não pode estar em branco" placeholder="R$">
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="tipo"><b>Tipo</b> </label>
                        <select class="form-select" name="tipo" id="tipo">
                            <option value=""></option>
                            <option value="Novo">Novo</option>
                            <option value="Seminovo">Seminovo</option>
                        </select>
                    </div>

                    {{-- LINHA 3 --}}
                    <div class="col-12 col-md-4 mt-3">
                        <label for="cor_id">
                            <b>Cor</b>
                        </label>
                        <select class="form-select" name="cor_id" id="cor_id">
                            @foreach ($cor as $c)
                                <option class="Disabled">Selecione a cor...</option>
                                <option value="{{ $c->cor }}">{{ $c->cor }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="marca_id"><b>Marca</b></label>
                        <select class="form-select" name="marca_id" id="marca_id">
                            @foreach ($marca as $m)
                                <option class="Disabled">Selecione a marca...</option>
                                <option value="{{ $m->marca }}">{{ $m->marca }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label for="marca_id"><b>Usuario</b></label>
                        <select class="form-select" name="usuario_id" id="usuario_id">
                            @foreach ($usuario as $u)
                                <option class="Disabled">Selecione o Usuario...</option>
                                <option value="{{ $u->login }}">{{ $u->login }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- <div class="col-12 col-md-4 mt-3">
                        <label for="foto">Foto</label>
                        <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto"
                            name="foto">
                        @error('foto')
                            <div class="invalid-feedback">
                            </div>
                        @enderror
                    </div> --}}

                    <div class="col-12 col-md-4 mt-3">
                        <label for="descricao" class="form-label"><b>Descrição</b> (Opcional)</label>
                        <textarea type="text" id="descricao" name="descricao" class="form-control"
                            placeholder="Descrição"></textarea>
                    </div>


                    {{-- <div class="col-12 col-md-4 mt-3">
                    <label for="formFile" class="form-label"></label>
                    <input class="form-control" type="file" name="fotoDestaque" id="formFile">
                    </div> --}}


                    {{-- <div class="col-auto">
                    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                    <select class="form-select" name="usuario_id" id="autoSizingSelect">
                        <option class="Disabled">Selecione o usuario...</option>
                    </select>
                    </div> --}}
                </div>

                <button type="submit" class="btn btn-outline-info mb-3">
                    Salvar Dados
                </button>
            </form>
        </div>

    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>

</html>
