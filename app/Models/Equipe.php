<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'turma_id'
    ];

    public function turma(){
        return $this->belongsTo(\App\Models\Turma::class,'turma_id');
    }

}
