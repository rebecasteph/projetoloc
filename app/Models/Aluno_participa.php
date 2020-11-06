<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno_participa extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'aluno_id',
        'turma_id',
        'equipe_id',
        'pb_aluno',
        'xp_aluno'
    ];

}
