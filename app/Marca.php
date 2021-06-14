<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = ['marca', 'update_up', 'created_up'];
    protected $table = 'marca';
}
