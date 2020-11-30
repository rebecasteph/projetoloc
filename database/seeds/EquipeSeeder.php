<?php

use Illuminate\Database\Seeder;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipe::create([
            'nome'  => 'aluno',
            'turma_id' => '2'
        ]);
    }
}
