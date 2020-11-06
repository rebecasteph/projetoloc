<?php

use Illuminate\Database\Seeder;
use App\Models\Aluno_participa;

class Aluno_participaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aluno_participa::create([
            'aluno_id' => '1',
            'turma_id' => '1',
            'pb_aluno' => '10',
            'xp_aluno' => '15'
        ]);
        Aluno_participa::create([
            'aluno_id' => '1',
            'turma_id' => '2',
            'pb_aluno' => '10',
            'xp_aluno' => '15'
        ]);
        Aluno_participa::create([
            'aluno_id' => '1',
            'turma_id' => '3',
            'pb_aluno' => '10',
            'xp_aluno' => '15'
        ]);
        Aluno_participa::create([
            'aluno_id' => '2',
            'turma_id' => '1',
            'pb_aluno' => '10',
            'xp_aluno' => '15'
        ]);
        Aluno_participa::create([
            'aluno_id' => '2',
            'turma_id' => '2',
            'pb_aluno' => '10',
            'xp_aluno' => '15'
        ]);
        Aluno_participa::create([
            'aluno_id' => '3',
            'turma_id' => '3',
            'pb_aluno' => '10',
            'xp_aluno' => '15'
        ]);
    }
}
