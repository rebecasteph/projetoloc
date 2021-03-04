<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'nome' => 'menu_professor',
            'permission_user_id' => '1'
        ]);
        Permission::create([
            'nome' => 'menu_aluno',
            'permission_user_id' => '2'
        ]);
    }
}
