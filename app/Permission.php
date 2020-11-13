<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded = [
        'nome', 'permission_user_id'
    ];

    public function permission_user(){
        return $this->belongsTo(\App\Permissions_user::class,'permission_user_id');
    }

    
}
