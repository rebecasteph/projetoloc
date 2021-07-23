<?php

use Illuminate\Database\Seeder;
use App\Models\Sentenca;

class SentencaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sentenca::create([
            'descr'     => 'Escolher agir mal com os colegas', 
            'valor'     => '25',
            'tipo'      => 'negativa',
            'turma_id'  => '1'
        ]);
        Sentenca::create([
            'descr'     => 'Escolher agir mal com os colegas', 
            'valor'     => '25',
            'tipo'      => 'negativa',
            'turma_id'  => '2'
        ]);
        Sentenca::create([
            'descr'     => 'Escolher agir mal com os colegas', 
            'valor'     => '25',
            'tipo'      => 'negativa',
            'turma_id'  => '3'
        ]);

        Sentenca::create([
            'descr'     => 'Ser insubordinado durante a aula', 
            'valor'     => '25',
            'tipo'      => 'negativa',
            'turma_id'  => '1'
        ]);
        Sentenca::create([
            'descr'     => 'Ser insubordinado durante a aula', 
            'valor'     => '25',
            'tipo'      => 'negativa',
            'turma_id'  => '2'
        ]);
        Sentenca::create([
            'descr'     => 'Ser insubordinado durante a aula', 
            'valor'     => '25',
            'tipo'      => 'negativa',
            'turma_id'  => '3'
        ]);

        Sentenca::create([
            'descr'     => 'Ajudar um colega em sala de aula', 
            'valor'     => '25',
            'tipo'      => 'positiva',
            'turma_id'  => '1'
        ]);
        Sentenca::create([
            'descr'     => 'Ajudar um colega em sala de aula', 
            'valor'     => '25',
            'tipo'      => 'positiva',
            'turma_id'  => '2'
        ]);
        Sentenca::create([
            'descr'     => 'Ajudar um colega em sala de aula', 
            'valor'     => '25',
            'tipo'      => 'positiva',
            'turma_id'  => '3'
        ]);
        Sentenca::create([
            'descr'     => 'Ser respeitoso durante apresentação', 
            'valor'     => '25',
            'tipo'      => 'positiva',
            'turma_id'  => '1'
        ]);
        Sentenca::create([
            'descr'     => 'Ser respeitoso durante apresentação', 
            'valor'     => '25',
            'tipo'      => 'positiva',
            'turma_id'  => '2'
        ]);
        Sentenca::create([
            'descr'     => 'Ser respeitoso durante apresentação', 
            'valor'     => '25',
            'tipo'      => 'positiva',
            'turma_id'  => '3'
        ]);
        
    }
}
