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
    public function missaoAluno($idParticipa){
        $id = $idParticipa;
        return view ('telaAluno.missao.telaMissao', compact('id'));
    }
    public function faseAluno($idParticipa){
        $id = $idParticipa;
        return view ('telaAluno.chefao.faseGeral', compact('id'));
    }

    public function telaPerfilAluno( Aluno_participa $participa)
    {
        $all_participa = $participa->where('aluno_id', auth()->user()->id)->get();

        return view ('telaAluno.telaPerfilAluno',compact('all_participa'));
    }
    
}
