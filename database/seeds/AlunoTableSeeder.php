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
            'nome'  => 'aluno',
            'email' => 'aluno@gmail.com',
            'senha' => bcrypt('123')

        ]);
    }
}