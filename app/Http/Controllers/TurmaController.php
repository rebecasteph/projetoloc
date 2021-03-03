<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Aluno_participa;
use Dirape\Token\Token;
use DirapeToken;
use Illuminate\Support\Facades\Auth;

class TurmaController extends Controller
{
    private $turma;

    public function __construct(Turma $turma){
        $this->turma = $turma;
    }

    public function lista(Turma $turma, Aluno_participa $aluno)
    {
        //dd($turmas->all()); //$turmas = $turma->all() ;
        $alunos = $aluno->count();
        $turmas = $turma->where('prof_id', auth()->user()->id)->orderBy('nome', 'asc')->get(); //comment
 
        return view ('telaProf.listaTurmas', compact('turmas','alunos'));
    }

    public function store (Request $request){
        //dd($request->only('codigo-turma'));
        //$request->input('codigo-turma'));

        $codigo = (new Token())->UniqueString('turmas', 'codigo', 6);

        $dataForm = [
            'nome'      => $request->input('nome'),
            'codigo'    => $codigo,
            'prof_id'   => Auth::user()->id
        ];

        $insert = $this->turma->insert($dataForm);

        return redirect()->to('/gerenciar-turmas')
                ->with('mensagem', 'Nova turma criada com sucesso!');
    }

    public function show (Request $request, $id){

        $dataForm = $request->except('_token');
        $turma = $this->turma->find($id);

        $turma->update($dataForm);
        
        return redirect()->to('/gerenciar-turmas')
                ->with('mensagem', 'Dados alterados com sucesso!');
        
    }

    public function configTurma($idTurma, Aluno_participa $aluno)
    {
        $turma = Turma::find($idTurma);
        $alunos = $aluno->where('turma_id',$turma->id)->get();

        $meta_elite     = ($turma->up_xp_equipe);
        $meta_mestre    = ($turma->up_xp_equipe)*2;
        $meta_epico     = ($turma->up_xp_equipe)*3;
        $meta_lendario  = ($turma->up_xp_equipe)*4;
        $meta_mitico    = ($turma->up_xp_equipe)*5;


        $this->authorize('acesso-turma-prof', $turma);

        return  view ('telaProf.configTurma.configTurma',
                compact('turma','alunos','meta_elite','meta_mestre','meta_epico','meta_lendario','meta_mitico'));
    }


    




}
