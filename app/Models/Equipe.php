<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'soma_xp',
        'turma_id'
    ];

}
