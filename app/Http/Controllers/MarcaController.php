<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function create()
    {
        return view('marca.create');
    }
    public function store(Request $request)
    {
        Marca::create([
            'nome' => $request->nome,
        ]); 
        return "Marca cadastrada com Sucesso!";
    }
}
