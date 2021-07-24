<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Sentenca;
use App\Models\Aluno_participa;
use Dirape\Token\Token;
use DirapeToken;
use Illuminate\Support\Facades\Auth;
Use Redirect;

class TurmaController extends Controller
{
    private $turma;

    public function __construct(Turma $turma){
        $this->turma = $turma;
    }

    public function listaTurmaProf(Turma $turma, Aluno_participa $aluno)
    {
        //dd($turmas->all()); //$turmas = $turma->all() ;
        $alunos = $aluno->count();
        $turmas = $turma->where('prof_id', auth()->user()->id)->orderBy('nome', 'asc')->get(); //comment
 
        return view ('listaTurmas', compact('turmas','alunos'));
    }

    public function inicialProf($idTurma){
        $turma  = Turma::find($idTurma);

        $alunos = Aluno_participa::where('turma_id',$turma->id)->get();
        
        $this->authorize('acesso-turma-prof', $turma);

        return view('menu.inicial',compact('turma', 'alunos'));
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
        
        $tab    =   $request->input('tab_id');
        $dataForm = $request->except('_token');
        $turma = $this->turma->find($id);

        $turma->update($dataForm);
        
        return back()->withInput(['tab'=>$tab]);
        
    }

    public function configTurma($idTurma, Aluno_participa $aluno)
    {
        $turma          = Turma::find($idTurma);
        $p_sentencas      = Sentenca::where('turma_id',$turma->id)
                                    ->where('tipo','positiva')->get();
        $n_sentencas      = Sentenca::where('turma_id',$turma->id)
                                    ->where('tipo','negativa')->get();

        //dd($p_sentencas->all());

        $alunos         = $aluno->where('turma_id',$turma->id)->get();

        $meta_elite     = ($turma->up_xp_equipe);
        $meta_mestre    = ($turma->up_xp_equipe)*2;
        $meta_epico     = ($turma->up_xp_equipe)*3;
        $meta_lendario  = ($turma->up_xp_equipe)*4;
        $meta_mitico    = ($turma->up_xp_equipe)*5;


        $this->authorize('acesso-turma-prof', $turma);

        return  view ('telaProf.configTurma.configTurma',
                compact('turma','alunos','p_sentencas','n_sentencas','meta_elite','meta_mestre','meta_epico','meta_lendario','meta_mitico'));
    }


    public function createSentenca (Request $request){

        $turma  =   $request->input('turma_id');
        $tab    =   $request->input('tab_id');

        $dataForm = [
            'descr'     => $request->input('descr'),
            'valor'     => $request->input('valor'),
            'tipo'      => $request->input('tipo'),
            'turma_id'  => $turma
        ];
        
        $sentenca = new Sentenca;
        $sentenca->insert($dataForm);  

        return back()->withInput(['tab'=>$tab]);
    }

    public function editSentenca (Request $request){

        $tab    =   $request->input('tab_id');
        $sid    =   $request->input('sent_id');
        $turma  =   $request->input('turma_id');

        $dataForm = [
            'descr'     => $request->input('descr'),
            'valor'     => $request->input('valor'),
        ];

        $sentenca = Sentenca::find($sid);
        $sentenca->update($dataForm);
        
        return back()->withInput(['tab'=>$tab]);
        
    }


    


    




}
