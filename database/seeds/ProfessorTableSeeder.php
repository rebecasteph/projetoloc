<?php

use Illuminate\Database\Seeder;
use App\Professor;

class ProfessorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Professor::create([
            'nome'  => 'prof',
            'email' => 'prof@gmail.com',
            'password' => bcrypt('123')

        ]);
    }
}
