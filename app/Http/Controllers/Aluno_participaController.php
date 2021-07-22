<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno_participa;
use App\Models\Equipe;
use App\Models\Missao;
use App\Models\MissaoAtv;
use App\Models\Sentenca;
use App\Models\Turma;
use Dirape\Token\Token;
use DirapeToken;
use Illuminate\Support\Facades\Auth;


class Aluno_participaController extends Controller
{
    private $aluno_participa;

    public function __construct(Aluno_participa $aluno_participa){
        $this->aluno_participa = $aluno_participa;
    }

    public function listaTurmaAluno(Aluno_participa $participa)
    {
        //dd($turmas->all()); 
        $all_participa = $participa->where('aluno_id', auth()->user()->id)->orderBy('turma_id', 'asc')->get();
        return view ('listaTurmas',compact('all_participa'));
    }

    public function regras($idParticipa, Aluno_participa $aluno_participa, Turma $turma)
    {
        $participa = Aluno_participa::find($idParticipa);
        $this->authorize('acesso-turma-aluno', $participa);
        $turma = Turma::find($participa->turma_id);
        
        $meta_elite     = ($turma->up_xp_equipe);
        $meta_mestre    = ($turma->up_xp_equipe)*2;
        $meta_epico     = ($turma->up_xp_equipe)*3;
        $meta_lendario  = ($turma->up_xp_equipe)*4;
        $meta_mitico    = ($turma->up_xp_equipe)*5;

        return  view('telaAluno.regrasTurma',
                compact('turma','meta_elite','meta_mestre','meta_epico','meta_lendario','meta_mitico'));
    }

    public function inicialAluno($idParticipa, Aluno_participa $aluno_participa)
    {
        $participa      = Aluno_participa::find($idParticipa);
        $nivel_aluno    = intval($participa->xp_aluno/$participa->turma->up_xp_aluno);
        $percentage     = ($participa->xp_aluno%$participa->turma->up_xp_aluno)/$participa->turma->up_xp_aluno*100;
        $atual          = $participa->xp_aluno % $participa->turma->up_xp_aluno;
        $nivel_equipe   = 'X';
        /* JOGADORES->Turma */
        $colegas = $aluno_participa->where('turma_id',$participa->turma->id)->get();
        
        $this->authorize('acesso-turma-aluno', $participa);

        return view('menu.inicial',compact('colegas','participa','nivel_aluno','atual','nivel_equipe','percentage'));
    }

    
    public function store (Request $request){
        $codigo = $request->input('codigo');
        $turma = Turma::where('codigo', $codigo)->first();
        $dataForm = [
            'aluno_id'  => Auth::user()->id,
            'turma_id'  => $turma->id,
            'heroi_id'  => $request->input('heroi')
        ];
        $this->aluno_participa->insert($dataForm);

        return redirect()->to('/minhas-turmas')
        ->with('mensagem', 'Nova turma cadastrada com sucesso!');
    }


}
