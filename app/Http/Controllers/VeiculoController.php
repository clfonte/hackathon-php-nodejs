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
        $cor = Cor::all();
        $marca = Marca::All();
        return view('veiculo.create', compact('cor','marca'));
    }

    public function store(Request $request)
    {
        // Handle File Upload
        if($request->hasFile('img_itens')){
            // Get filename with the extension
            $filenameWithExt = $request->file('img_itens')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('img_itens')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('img_itens')->storeAs('public/img_itens', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }
        //save in database
        $itens = Veiculo::create([
            'modelo' => $request->modelo,
            'anoModelo' => $request->anoModelo,
            'anoFabricacao' => $request->anoFabricacao,
            'valor' => $request->valor,
            'tipo' => $request->tipo,
            'descricao' => $request->descricao,
            'cor_id' => $request->cor_id,
            'marca_id' => $request->marca_id,
            'img_itens' => $fileNameToStore
        ]);
        $request->session()->flash(
            'mensagem',
            "Item {$itens->id} criad@ com sucesso {$itens->nome}"
        );
        return  redirect()->route('listar_itens');
    }


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
