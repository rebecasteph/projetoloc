<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view ('welcome');
    }
    public function login(){
        return view('login');
    }

    /* ROTAS ALUNO */
    public function inicial(){
        return view('inicial');
    }
    public function missaoAluno(){
        return view ('telaAluno.missao.telaMissao');
    }
    public function faseAluno(){
        return view ('telaAluno.chefao.faseGeral');
    }
    public function listaTurmas(){
        return view ('telaAluno.listaTurmas');
    }
    public function telaPerfilAluno(){
        return view ('telaAluno.telaPerfilAluno');
    }

    /* ROTAS PROF */
    public function inicialProf(){
        return view('inicial');
    }
    public function missaoProf(){
        return view ('telaProf.missao.telaMissao');
    }
    public function faseProf(){
        return view ('telaProf.chefao.faseGeral');
    }
    public function listaTurmasProf(){
        return view ('telaProf.listaTurmas');
    }
    public function configTurma(){
        return view ('telaProf.configTurma.configTurma');
    }
    public function telaPerfilProf(){
        return view ('telaProf.telaPerfilProf');
    }


}
