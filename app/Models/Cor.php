<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cor extends Model
{
    use SoftDeletes;

    protected $table = 'cor';
}
