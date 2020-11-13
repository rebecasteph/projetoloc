<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Dirape\Token\Token;
use DirapeToken;


class Turma extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'nome', 
        'instituicao',

        'up_xp_aluno',
        'up_xp_equipe',
        'plus_xp_reagir',
        'plus_pb_up_elo',
        'plus_xp_compra',

        'prof_id'
    ];
    protected $DT_settings=['codigo','type'=>DT_UniqueStr,'size'=>6,'special_chr'=>false];

    public function professor(){
        return $this->belongsTo(\App\Professor::class,'prof_id');
    }


}
