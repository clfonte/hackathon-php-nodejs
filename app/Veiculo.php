<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = ['veiculo'];
    protected $fillable = ['modelo',
                        'anoModelo', 
                        'anoFabricacao', 
                        'valor', 
                        'tipo', 
                        'img_itens',
                         'descricao', 
                         'cor_id', 
                         'marca_id', 
                        //  'usuario_id',
                        ];
}
 