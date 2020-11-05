<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
    }

    /* ROTAS ALUNO */
    public function inicial(){
        return view('telaAluno.inicial');
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
    
}
