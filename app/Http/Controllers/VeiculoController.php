<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function create()
    {
        return view('veiculo.create');
    }
    public function store(Request $request){
        dd($request->all());
    }
}
