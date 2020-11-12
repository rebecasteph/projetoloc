<?php

use Illuminate\Database\Seeder;
use Dirape\Token\Token;
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

        Token :: UniqueString ( $ table_name , $ column_name , 10 );
     */
    public function run()
    {
        Turma::create([
            'nome'          => 'Turma A', 
            'codigo'        => (new Token())->UniqueString('turmas', 'codigo', 6),
            'instituicao'   => 'Instituto Teste a',
    
            'up_xp_aluno'   => '20',
            'up_xp_equipe'  => '50',
            'plus_xp_reagir' => '5',
            'plus_pb_up_elo' => '5',
            'plus_xp_compra' => '5',
            'prof_id'        => '1'
        
        ]);
        Turma::create([
            'nome'          => 'Turma B', 
            'codigo'        => (new Token())->UniqueString('turmas', 'codigo', 6),
            'instituicao'   => 'Instituto Teste b',
    
            'up_xp_aluno'   => '20',
            'up_xp_equipe'  => '50',
            'plus_xp_reagir' => '5',
            'plus_pb_up_elo' => '5',
            'plus_xp_compra' => '5',
            'prof_id'        => '2'
        ]);
        Turma::create([
            'nome'          => 'Turma C', 
            'codigo'        => (new Token())->Unique('turmas', 'codigo', 6),
            'instituicao'   => 'Instituto Teste c',
    
            'up_xp_aluno'   => '20',
            'up_xp_equipe'  => '50',
            'plus_xp_reagir' => '5',
            'plus_pb_up_elo' => '5',
            'plus_xp_compra' => '5',
            'prof_id'        => '1'
        ]);
    }
}
