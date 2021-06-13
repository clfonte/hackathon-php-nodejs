<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cor;

class CorController extends Controller
{
    public function create()
    {
        return view('cor.create');
    }

    public function read()
    {

        $cor = Cor::all();
        return view('cor.read', compact('cor'));
    }

    public function edit($id)
    {
        $cor = Cor::finfOrFail($id);
        return view('cor.edit', ['cor' => $cor]);
    }

    public function update(Request $request, $id)
    {

        $cor = Cor::findOrFail($id);

        $cor->update([
            'cor' => $request->cor
        ]);
        return "alert('Editado com sucesso.').history.back();";
    }

    public function store(Request $request)
    {
        Cor::create([
            'cor' => $request->cor,
        ]);
        return "alert('Cadastrado com sucesso.').history.back();";
    }
}
