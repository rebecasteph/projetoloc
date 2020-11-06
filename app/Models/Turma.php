<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'nome', 
        'codigo',
        'instituicao',

        'up_xp_aluno',
        'up_xp_equipe',
        'plus_xp_reagir',
        'plus_pb_up_elo',
        'plus_xp_compra',

        'prof_id'

    ];

}
