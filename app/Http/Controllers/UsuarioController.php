<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function create()
    {
        return view('usuario.create');
    }

    public function read()
    {
        $usuario = Usuario::all();
        return view('usuario.read', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuario.edit', ['usuario' => $usuario]);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        $usuario->update([
            'nome'  => $request->nome,
            'login' => $request->login,
            'senha' => $request->senha,
        ]);

        return redirect('usuario/listar');
    }

    // dados que estao sendo enviados para o form
    public function store(Request $request)
    {
        Usuario::create([
            'nome'  => $request->nome,
            'login' => $request->login,
            'senha' => $request->senha,
        ]);

        return redirect('usuario/listar');
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return redirect('usuario/listar');
    }
}
