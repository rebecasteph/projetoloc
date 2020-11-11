<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(AdminTableSeeder::class);
        $this->call(Permissions_userSeeder::class);
        $this->call(AlunoTableSeeder::class);
        $this->call(ProfessorTableSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(TurmaSeeder::class);
        $this->call(Aluno_participaSeeder::class);


        


    }
}
