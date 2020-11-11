<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use App\Models\Turma;
use App\Professor;
use App\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

/*         $gate->define('acesso-turma-prof', function(Professor $prof, Turma $turma){
            return $prof->id == $turma->prof_id;
        });
 */
/*         menu_aluno
        menu_professor
 */
        //$permissions = Permission::with('permission_user')->get();
        //dd($permissions);
    }
}
