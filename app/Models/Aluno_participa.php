<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno_participa extends Model
{
    public $timestamps = false;

    protected $guarded = [
        'aluno_id',
        'turma_id',
        'equipe_id',
        'pb_aluno',
        'xp_aluno'
    ];

    public function turma(){
        return $this->belongsTo(\App\Models\Turma::class,'turma_id');
    }
    public function aluno(){
        return $this->belongsTo(\App\Aluno::class,'aluno_id');
    }


}
