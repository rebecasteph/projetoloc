<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /* MENU ALUNO */
    public function heroiAluno(){
        return 'heroiAluno';
    }
    public function jogadoresAluno(){
        return 'jogadoresAluno';
    }
    public function equipamentosAluno(){
        return 'equipamentosAluno';
    }
    public function chefaoAluno(){
        return 'chefaoAluno';
    }
    public function missaoAluno(){
        return 'missaoAluno';
    }
    public function chatAluno(){
        return 'chatAluno';
    }

    /* MENU PROFESSOR */

    public function alunosProf(){
        return 'alunosProf';
    }
    public function missoesProf(){
        return 'missoesProf';
    }
    public function chefaoProf(){
        return 'chefaoProf';
    }
    public function relatorioProf(){
        return 'relatorioProf';
    }
    public function chatProf(){
        return 'chatProf';
    }









}
