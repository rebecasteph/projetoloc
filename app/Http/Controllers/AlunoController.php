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


class AlunoController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
    }

    /* ROTAS ALUNO */
    public function inicial($idParticipa)
    {
        $participa = Aluno_participa::find($idParticipa);
        $turma = Turma::find($participa->turma_id);

        $nivel_aluno    = intval($participa->xp_aluno/$turma->up_xp_aluno);
        $atual   = (($nivel_aluno + 1) * $turma->up_xp_aluno) - $participa->xp_aluno;
        $percentage = round((100*$atual)/$turma->up_xp_aluno, 2);
        
        $nivel_equipe   = 'X';

        return view('telaAluno.inicial',compact('turma','participa','nivel_aluno','nivel_equipe','percentage'));
    }
    public function missaoAluno(){
        return view ('telaAluno.missao.telaMissao');
    }
    public function faseAluno(){
        return view ('telaAluno.chefao.faseGeral');
    }
    public function listaTurmas(Turma $turma, Aluno_participa $participa)
    {
        //dd($turmas->all()); 
        $all_participa = $participa->where('aluno_id', auth()->user()->id)->get();
        return view ('telaAluno.listaTurmas',compact('all_participa'));
    }

    public function telaPerfilAluno(){
        return view ('telaAluno.telaPerfilAluno');
    }
    
}
