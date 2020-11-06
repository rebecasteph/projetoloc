<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MissaoAtv extends Model
{
     protected $fillable = [
        'nome',
        'descr',
        'xp',
        'pb',
        'ativa', 
        'comentarios',
        'aguardar_aprovacao',
        'missao_id'
    ];
}
