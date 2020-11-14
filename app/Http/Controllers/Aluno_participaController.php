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
use Dirape\Token\Token;
use DirapeToken;
use Illuminate\Support\Facades\Auth;


class Aluno_participaController extends Controller
{
    private $aluno_participa;

    public function __construct(Aluno_participa $aluno_participa){
        $this->aluno_participa = $aluno_participa;
    }

    public function lista(Aluno_participa $participa)
    {
        //dd($turmas->all()); 
        $all_participa = $participa->where('aluno_id', auth()->user()->id)->orderBy('turma_id', 'asc')->get();
        return view ('telaAluno.listaTurmas',compact('all_participa'));
    }

    public function inicial($idParticipa, Aluno_participa $aluno_participa)
    {
        $participa = Aluno_participa::find($idParticipa);

        $nivel_aluno    = intval($participa->xp_aluno/$participa->turma->up_xp_aluno);
        $atual   = (($nivel_aluno + 1) * $participa->turma->up_xp_aluno) - $participa->xp_aluno;
        $percentage = round((100*$atual)/$participa->turma->up_xp_aluno, 2);
        
        $nivel_equipe   = 'X';

        /* JOGADORES->Turma */
        $colegas = $aluno_participa->where('turma_id',$participa->turma->id)->get();


        $this->authorize('acesso-turma-aluno', $participa);

        return view('telaAluno.inicial',compact('colegas','participa','nivel_aluno','nivel_equipe','percentage'));
    }

    
    public function store (Request $request){
        $codigo = $request->input('codigo');
        $turma = Turma::where('codigo', $codigo)->first();
        //dd($turma);
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
