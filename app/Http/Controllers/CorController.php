<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cor;

class CorController extends Controller
{
    //criar dados
    public function create()
    {
        return view('cor.create');
    }

<<<<<<< HEAD
=======
    //resgatar os dados para listar
>>>>>>> dd2eabfb78c10421e370f5064861ae54bd47993b
    public function read()
    {

        $cor = Cor::all();
        return view('cor.read', compact('cor'));
    }


    //levar os dados para a tela de edição
    public function edit($id)
    {
        $cor = Cor::findOrFail($id);
        return view('cor.edit', ['cor' => $cor]);
    }


    //editar os dados
    public function update(Request $request, $id)
    {

        $cor = Cor::findOrFail($id);

        $cor->update([
            'cor' => $request->cor
        ]);
        return "<script>alert('Editado com sucesso.')history.back();</script>";
    }

    // Cadastrar
    public function store(Request $request)
    {
        Cor::create([
            'cor' => $request->cor,
        ]);
<<<<<<< HEAD
        return "Cor cadastrada com Sucesso!";
=======
        return "<script>alert('Cadastrado com sucesso.')history.back();</script>";
    }

    //Deletar
    public function destroy($id)
    {
        $cor = Cor::findOrFail($id);
        $cor->delete();

        return "<script>alert('Cadastrado com sucesso.')history.back();</script>";
>>>>>>> dd2eabfb78c10421e370f5064861ae54bd47993b
    }
}
