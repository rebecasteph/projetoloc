<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Aluno extends Authenticatable
{
    public $timestamps = false;

    protected $fillable = [
        'nome', 'email', 'password', 'permission_user_id'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
}
