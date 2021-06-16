<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Veiculo extends Model
{
    use SoftDeletes;

    protected $fillable = ['modelo', 'anoModelo', 'anoFabricacao', 'valor', 'tipo', 'fotoDestaque', 'opcional', 'cor_id', 'marca_id', 'usuario_id'];
    protected $table = 'veiculo';
}
