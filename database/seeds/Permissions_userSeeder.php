<?php

use Illuminate\Database\Seeder;
use App\Permissions_user;

class Permissions_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permissions_user::create([
            'tipo_usuario' => 'professor'
        ]);
        Permissions_user::create([
            'tipo_usuario' => 'aluno'
        ]);
    }
}
