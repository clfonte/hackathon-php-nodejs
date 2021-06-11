<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = ['modelo', 'anoModelo', 'anoFabricacao', 'valor', 'tipo', 'fotodestaque', 'opcional', 'cor_id', 'marca_id', 'usuario_id'];
}