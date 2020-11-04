<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
    }


    /* ROTAS PROF */
    public function inicial(){
        return view('telaProf.inicial');
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
