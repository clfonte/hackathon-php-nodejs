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

    public function store(Request $request)
    {
        Cor::create([
            'cor' => $request->cor,
        ]);
        return "Cor cadastrada com Sucesso!";
    }
}
