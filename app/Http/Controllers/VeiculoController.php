<?php

namespace App\Http\Controllers;

use App\Cor;
use App\Marca;
use App\Veiculo;
use Illuminate\Http\Request;



class VeiculoController extends Controller
{
    //inicio de cadastro
    public function create()
    {
        return view('veiculo.create'); 
    }
    public function store(Request $request)
    {
        $cor_id = Cor::find($request->cor);

        $marca_id = Marca::find($request->marca);

        Veiculo::create([  

            'modelo'        => $request->modelo, 
            'anoModelo'     => $request->anoModelo,
            'anoFabricacao' => $request->anoFabricacao,
            'valor'         => $request->valor,
            'tipo'          => $request->tipo,
            'opicional'     => $request->opicional,
            'fotoDestaque'  => $request->fotoDestaque->store('public'),
            'cor_id'        => $request->cor_id->associate($cor_id),
            'marca_id'      => $request->marca_id->associate($marca_id),
            'usuario_id'    => $request->usuario_id,
        ]);
        return "Veículo cadastrado com Sucesso!";
    }
    //fim de cadastro
    //listar
    public function read()
    {

        $veiculo = Veiculo::all();
        return view('veiculo.read', compact('veiculo'));
    }
    //fim de listar

    ////////////////////////////////////
    ////////// inicio de edição ////////
    ////////////////////////////////////
    //levar os dados para a tela de edição
    public function edit($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view('veiculo.edit', ['veiculo' => $veiculo]);
    }
    //editar os dados
    public function update(Request $request, $id)
    {
        // dd($request->All());

        $veiculo = Veiculo::findOrFail($id);

        $veiculo->update([
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
        return 'editado';
    }
    ////////////////////////////////////
    ////////// fim de edição ///////////
    ////////////////////////////////////
     //Deletar
     public function destroy($id)
     {
         $veiculo = Veiculo::findOrFail($id);
         $veiculo->delete();
 
         return "deletado";
 
     }
}
