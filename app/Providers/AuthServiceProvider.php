<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use App\Models\Turma;
use App\Professor;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('acesso-turma-prof', function(Professor $prof, Turma $turma){
            return $prof->id == $turma->prof_id;
        });

/*         $gate->define('acesso-turma-aluno', function(Aluno_participa $participa, Turma $turma){
            return $turma->id == $participa->turma_id;
        });
 */    }
}
