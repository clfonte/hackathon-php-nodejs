<?php

namespace App\Http\Controllers;

use App\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function create()
    {
        return view('veiculo.create');
    }
    public function store(Request $request)
    {
        Veiculo::create([
            'modelo'        => $request->modelo,
            'anoModelo'     => $request->anoModelo,
            'anoFabricacao' => $request->anoFabricacao,
            'valor'         => $request->valor,
            'tipo'          => $request->tipo,
            'opicional'     => $request->opicional,
            'fotoDestaque'  => $request->fotoDestaque,
            'cor_id'        => $request->cor_id,
            'marca_id'      => $request->marca_id,
            'usuario_id'    => $request->usuario_id,
        ]);
        return "Veículo cadastrado com Sucesso!";
    }
}
