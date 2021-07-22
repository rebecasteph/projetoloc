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
            'pb_aluno' => '15',
            'xp_aluno' => '50',
            'heroi_id' => 'heroi-1'
        ]);
        Aluno_participa::create([
            'aluno_id' => '2',
            'turma_id' => '1',
            'pb_aluno' => '48',
            'xp_aluno' => '70',
            'heroi_id' => 'heroi-2'
        ]);
        Aluno_participa::create([
            'aluno_id' => '3',
            'turma_id' => '1',
            'pb_aluno' => '55',
            'xp_aluno' => '74',
            'heroi_id' => 'heroi-3'
        ]);
        Aluno_participa::create([
            'aluno_id' => '1',
            'turma_id' => '2',
            'pb_aluno' => '55',
            'xp_aluno' => '74',
            'heroi_id' => 'heroi-3'
        ]);
        Aluno_participa::create([
            'aluno_id' => '2',
            'turma_id' => '2',
            'pb_aluno' => '55',
            'xp_aluno' => '74',
            'heroi_id' => 'heroi-2'
        ]);
        Aluno_participa::create([
            'aluno_id' => '3',
            'turma_id' => '2',
            'pb_aluno' => '55',
            'xp_aluno' => '74',
            'heroi_id' => 'heroi-1'
        ]);
        Aluno_participa::create([
            'aluno_id' => '1',
            'turma_id' => '3',
            'pb_aluno' => '55',
            'xp_aluno' => '74',
            'heroi_id' => 'heroi-2'
        ]);
        Aluno_participa::create([
            'aluno_id' => '2',
            'turma_id' => '3',
            'pb_aluno' => '55',
            'xp_aluno' => '74',
            'heroi_id' => 'heroi-3'
        ]);
        Aluno_participa::create([
            'aluno_id' => '3',
            'turma_id' => '3',
            'pb_aluno' => '55',
            'xp_aluno' => '74',
            'heroi_id' => 'heroi-1'
        ]);





    }
}
