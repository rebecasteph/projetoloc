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
    public function missaoProf(){
        return view ('telaProf.missao.telaMissao');
    }
    public function faseProf(){
        return view ('telaProf.chefao.faseGeral');
    }

    public function telaPerfilProf(){
        $turmas = Turma::where('prof_id', auth()->user()->id)->get();
        return view ('meuPerfil', compact('turmas'));
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
