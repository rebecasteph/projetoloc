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
    public function inicial(){
        return view('telaProf.inicial');
    }
    public function missaoProf(){
        return view ('telaProf.missao.telaMissao');
    }
    public function faseProf(){
        return view ('telaProf.chefao.faseGeral');
    }

    public function listaTurmasProf(Turma $turma){
        $turmas = $turma->all() ;
        //dd($turmas->all());
/*         $sum_alunos = 0;
        foreach ($turmas as $turma){
            $sum_alunos = sumAlunos($turma);
        }
 */
        return view ('telaProf.listaTurmas', compact('turmas'));
    }
/*     public function sumAlunos(Turma $turma): int{

        $alunos = Aluno_participa::where('id' , '=' , $turma->id )->count();
        //$alunos = $aluno_participa->all()->where('turma_id', $turma->id);
        return $alunos;

    }
 */
    public function configTurma(){
        return view ('telaProf.configTurma.configTurma');
    }
    public function telaPerfilProf(){
        return view ('telaProf.telaPerfilProf');
    }
    
}
