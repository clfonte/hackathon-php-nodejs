<?php

namespace App\Http\Controllers;

use App\Cor;
use App\Marca;
use App\Veiculo;
use App\Usuario;
use Illuminate\Http\Request;



class VeiculoController extends Controller
{
    //inicio de cadastro
    public function create()
    {
        $cor = Cor::all();
        $marca = Marca::All();
        $usuario = Usuario::All();
        return view('veiculo.create', compact('cor', 'marca', 'usuario'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        //$cor_id = Cor::find($request->cor);

        //$marca_id = Marca::find($request->marca);

        Veiculo::create([

            'modelo'        => $request->modelo,
            'anoModelo'     => $request->anoModelo,
            'anoFabricacao' => $request->anoFabricacao,
            'valor'         => $request->valor,
            'tipo'          => $request->tipo,
            'descricao'     => $request->descricao,
            'cor_id'        => $request->cor_id,
            'marca_id'      => $request->marca_id,
            'usuario_id'    => $request->usuario_id,
            // 'fotoDestaque'  => $request->fotoDestaque->store('public'),
        ]);

        return redirect('veiculo/listar');
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
        $usuario = Usuario::All();
        $cor = Cor::All();
        $marca = Marca::All();
        return view('veiculo.edit', ['veiculo' => $veiculo], compact('cor', 'marca', 'usuario'));
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
            'descricao'     => $request->descricao,
            //'fotoDestaque'  => $request->fotoDestaque,
            'cor_id'        => $request->cor_id,
            'marca_id'      => $request->marca_id,
            'usuario_id'    => $request->usuario_id,
        ]);
        return redirect('veiculo/listar');
    }
    ////////////////////////////////////
    ////////// fim de edição ///////////
    ////////////////////////////////////
    //Deletar
    public function destroy($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->delete();

        return redirect('veiculo/listar');
    }

    //listar
    public function api()
    {

        $veiculo = Veiculo::all();
        return view('veiculo.api', compact('veiculo'));
    }
}
