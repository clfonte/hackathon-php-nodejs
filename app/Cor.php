<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cor extends Model
{
    protected $fillable = ['cor','update_up','created_up'];
    protected $table = 'cor';
}
