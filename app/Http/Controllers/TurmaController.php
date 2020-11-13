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

    




}
