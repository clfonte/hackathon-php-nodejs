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
            'fotodestaque' => $request->fotodestaque,
            'modelo' => $request->modelo,
            'anoModelo' => $request->anoModelo,
            'anoFabricacao' => $request->anoFabricacao,
            'valor' => $request->valor,
            'tipo' => $request->tipo,
            'opicional' => $request->opicional,
            'cor_id' => $request->cor_id,
            'marca_id' => $request->marca_id,
            'usuario_id' => $request->usuario_id,
        ]); 
        return "Marca cadastrada com Sucesso!";
    }
}
