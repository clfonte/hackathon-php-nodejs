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
    public function store(Request $request)
    {
        Cor::create([
            'nome' => $request->nome,
        ]); 
        return "Cor cadastrada com Sucesso!";
    }
  
}
