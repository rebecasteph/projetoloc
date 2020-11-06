<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(AdminTableSeeder::class);
        $this->call(AlunoTableSeeder::class);
        $this->call(ProfessorTableSeeder::class);
        $this->call(TurmaSeeder::class);
        $this->call(Aluno_participaSeeder::class);


        


    }
}
