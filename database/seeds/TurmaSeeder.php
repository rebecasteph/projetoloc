<?php

use Illuminate\Database\Seeder;
use App\Models\Turma;

class TurmaSeeder extends Seeder
{
    /*
        'nome', 
        'codigo',
        'instituicao',

        'up_xp_aluno',
        'up_xp_equipe',
        'plus_xp_reagir',
        'plus_pb_up_elo',
        'plus_xp_compra',

        'prof_id'
     */
    public function run()
    {
        Turma::create([
            'nome'          => 'Turma A', 
            'codigo'        => 'abc',
            'instituicao'   => 'Instituto Teste',
    
            'up_xp_aluno'   => '20',
            'up_xp_equipe'  => '50',
            'plus_xp_reagir' => '5',
            'plus_pb_up_elo' => '5',
            'plus_xp_compra' => '5',
    
            'prof_id'       => '1'
    
        ]);
    }
}
