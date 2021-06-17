<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cores - Listagem</title>

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
        <table class="table table-striped table-hover">
            <h3 class="mt-3 text-info">Listagem de Veiculos</h3>
            <thead>
                <th class="mt-3">Modelo</th>
                <th>Ano doModelo</th>
                <th>Ano de Fabricação</th>
                <th>Valor</th>
                <th>Tipo</th>
                <th>Observação</th>
                <th>Cor</th>
                <th>Marca</th>
                {{-- <th>Usuario</th> --}}
                <th>Editar</th>
                <th>Excluir</th>

            </thead>
            <tbody>
                @foreach ($veiculo as $v)
                    <tr>
                        <td>{{ $v->modelo }}</td>
                        <td>{{ $v->anoModelo }}</td>
                        <td>{{ $v->anoFabricacao }}</td>
                        <td>{{ $v->valor }}</td>
                        <td>{{ $v->tipo }}</td>
                        <td>{{ $v->descricao }}</td>
                        <!-- <td>{{ $v->fotoDestaque }}</td>-->
                        <td>{{ $v->cor_id }}</td>
                        <td>{{ $v->marca_id }}</td>
                        {{-- <td>{{ $v->usuario_id }}</td> --}}
                        <td><a class="btn btn-outline-info"
                                href="{{ route('editarv', ['id' => $v->id]) }}">Editar</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Excluir
                            </button>
                        </td>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" role="dialog" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Atenção!</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true"></span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        Tem certeza que deseja excluir esse Veiculo?
                                    </div>
                                    <div class="modal-footer">
                                        <a class="btn btn-outline-danger"
                                            href="{{ route('excluir_veiculo', ['id' => $v->id]) }}">Sim</a>
                                        <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">
                                            Não
                                        </button>

                                    </div>
                                </div>
                            </div>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-outline-info mb-3" href="{{ route('registrar_veiculo') }}">Cadastrar</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>

</html>
