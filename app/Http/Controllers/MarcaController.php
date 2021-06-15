<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{

    //criar
    public function create()
    {
        return view('marca.create');
    }


    //listar
    public function read()
    {

        $marca = Marca::all();
        return view('marca.read', compact('marca'));
    }

    //cadastrar
    public function store(Request $request)
    {
        Marca::create([
            'marca' => $request->marca,
        ]);
        return redirect('marca/listar');
    }

    //levar os dados para a tela de edição
    public function edit($id)
    {
        $marca = Marca::findOrFail($id);
        return view('marca.edit', ['marca' => $marca]);
    }


    //editar os dados
    public function update(Request $request, $id)
    {
        // dd($request->All());

        $marca = Marca::findOrFail($id);

        $marca->update([
            'marca' => $request->marca
        ]);
        return redirect('marca/listar');
    }

    //Deletar
    public function destroy($id)
    {
        $marca = Marca::findOrFail($id);
        $marca->delete();

        return redirect('marca/listar');
    }
}
