<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sentenca extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'descr',
        'valor',
        'tipo',
        'turma_id'
    ];

    public function turma(){
        return $this->belongsTo(\App\Models\Turma::class,'turma_id');
    }

    


}
