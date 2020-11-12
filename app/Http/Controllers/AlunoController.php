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

        $nivel_aluno    = intval($participa->xp_aluno/$participa->turma->up_xp_aluno);
        $atual   = (($nivel_aluno + 1) * $participa->turma->up_xp_aluno) - $participa->xp_aluno;
        $percentage = round((100*$atual)/$participa->turma->up_xp_aluno, 2);
        
        $nivel_equipe   = 'X';

        return view('telaAluno.inicial',compact('turma','participa','nivel_aluno','nivel_equipe','percentage'));
    }
    public function missaoAluno($idParticipa){
        $id = $idParticipa;
        return view ('telaAluno.missao.telaMissao', compact('id'));
    }
    public function faseAluno($idParticipa){
        $id = $idParticipa;
        return view ('telaAluno.chefao.faseGeral', compact('id'));
    }
    public function listaTurmas(Aluno_participa $participa)
    {
        //dd($turmas->all()); 
        $all_participa = $participa->where('aluno_id', auth()->user()->id)->get();
        return view ('telaAluno.listaTurmas',compact('all_participa'));
    }

    public function telaPerfilAluno( Aluno_participa $participa)
    {
        $all_participa = $participa->where('aluno_id', auth()->user()->id)->get();

        return view ('telaAluno.telaPerfilAluno',compact('all_participa'));
    }
    
}
