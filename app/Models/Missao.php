<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Missao extends Model
{
    protected $fillable = [
        'nome',
        'ativa', 
        'missao_id'
    ];

}
