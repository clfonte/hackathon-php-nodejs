<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cor extends Model
{
    use SoftDeletes;

    protected $fillable = ['cor', 'update_up', 'created_up'];
    protected $table = 'cor';
}
