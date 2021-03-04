<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno_participa;
use App\Models\ChefaoFase;
use App\Models\Equipe;
use App\Models\Missao;
use App\Models\MissaoAtv;
use App\Models\Sentenca;
use App\Models\Turma;
use Illuminate\Support\Facades\Auth;

class AlunoController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
    }

    /* ROTAS ALUNO */
    public function missaoAluno($idParticipa)
    {
        $id = $idParticipa;
        return view ('telaAluno.missao.telaMissao', compact('id'));
    }
    public function faseAluno($idParticipa)
    {
        $id = $idParticipa;
        return view ('telaAluno.chefao.faseGeral', compact('id'));
    }
    public function telaPerfilAluno( Aluno_participa $participa)
    {
        $all_participa = $participa->where('aluno_id', auth()->user()->id)->get();
        return view ('telaAluno.telaPerfilAluno',compact('all_participa'));
    }

    /* MANTER PERFIL */   
     public function show (Request $request){
        $dataForm = $request->except('_token', 'password');

        if ($request['password'] != null)
            $dataForm['password'] = bcrypt($request['password']);

        $update = auth()->user()->update($dataForm);

        if($update)
            return redirect()->to('/meu-perfil')
                    ->with('sucesso', 'Dados alterados com sucesso!');
        
        return redirect()->to('/meu-perfil')
                ->with('erro', 'Erro ao alterar dados.');
        
    }






}
