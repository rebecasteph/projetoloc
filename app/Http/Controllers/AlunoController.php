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
    public function inicial(){
        return view('telaAluno.inicial');
    }
    public function missaoAluno(){
        return view ('telaAluno.missao.telaMissao');
    }
    public function faseAluno(){
        return view ('telaAluno.chefao.faseGeral');
    }
    public function listaTurmas(Turma $turma, Aluno_participa $participa)
    {
        //dd($turmas->all()); //$turmas = $turma->all() ;
        $all_participa = $participa->where('aluno_id', auth()->user()->id)->get();
/*         $turmas = [];
        foreach ($all_participa as $participa){
            $a = $participa->turma_id;
            $turmas[$participa] = Turma::find($a);
            //$this->authorize('acesso-turma-prof', $turma);
            
        }
 */ 

        return view ('telaAluno.listaTurmas',compact('turmas'));
    }
    public function telaPerfilAluno(){
        return view ('telaAluno.telaPerfilAluno');
    }
    
}
