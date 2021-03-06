<?php

use Illuminate\Database\Seeder;
use App\Aluno;

class AlunoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aluno::create([
            'nome'  => 'Aluno',
            'email' => 'aluno@gmail.com',
            'password' => bcrypt('123'),
            'permission_user_id' => '2'
        ]);
        Aluno::create([
            'nome'  => 'outro aluno',
            'email' => 'outroaluno@gmail.com',
            'password' => bcrypt('123'),
            'permission_user_id' => '2'
        ]);
        Aluno::create([
            'nome'  => 'outro aluno 2',
            'email' => 'outroaluno2@gmail.com',
            'password' => bcrypt('123'),
            'permission_user_id' => '2'
        ]);
    }
}
