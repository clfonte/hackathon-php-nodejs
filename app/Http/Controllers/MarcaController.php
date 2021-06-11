<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function create()
    {
        return view('marca.create');
    }
    public function store(Request $request){
        dd($request->all());
    }
}
