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

    public function listaTurmasProf(Turma $turma, Aluno_participa $aluno)
    {
        //dd($turmas->all()); //$turmas = $turma->all() ;
        $alunos = $aluno->count();
        $turmas = $turma->where('prof_id', auth()->user()->id)->get();
 
        return view ('telaProf.listaTurmas', compact('turmas','alunos'));
    }
    public function configTurma($idTurma)
    {
        $turma = Turma::find($idTurma);
        $this->authorize('acesso-turma-prof', $turma);

        return view ('telaProf.configTurma.configTurma',compact('turma'));
    }
    public function telaPerfilProf(){
        return view ('telaProf.telaPerfilProf');
    }
    
}
