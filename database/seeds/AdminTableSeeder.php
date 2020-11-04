<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'nome'  => 'admin',
            'email' => 'admin@gmail.com',
            'senha' => bcrypt('123')

        ]);
    }
}
