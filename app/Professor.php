<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Professor extends Authenticatable
{
    protected $fillable = [
        'nome', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

}
