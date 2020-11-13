<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno_participa;
use App\Models\ChefaoFase;
use App\Models\Equipe;
use App\Models\Missao;
use App\Models\MissaoAtv;
use App\Models\Sentenca;
use App\Models\Turma;


class ProfController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
    }


    /* ROTAS PROF */
    public function inicial($idTurma){
        $turma = Turma::find($idTurma);
        return view('telaProf.inicial',compact('turma'));
    }
    public function missaoProf(){
        return view ('telaProf.missao.telaMissao');
    }
    public function faseProf(){
        return view ('telaProf.chefao.faseGeral');
    }

    public function configTurma($idTurma, Aluno_participa $aluno)
    {
        $turma = Turma::find($idTurma);
        $alunos = $aluno->where('turma_id',$turma->id)->get();

        $this->authorize('acesso-turma-prof', $turma);

        return view ('telaProf.configTurma.configTurma',compact('turma','alunos'));
    }
    public function telaPerfilProf(){
        return view ('telaProf.telaPerfilProf');
    }
    
}
