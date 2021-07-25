<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Auth;
use App\Professor;
use App\Aluno;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view ('welcome');
    }
    public function login(){
        return view('login');
    }

    public function postLogin(Request $request){
        //dd($request->all());
        $validator = validator($request->all(), [
            'email' => 'required|min:3|max:100',
            'password' => 'required|min:3|max:100',
        ]);

        if($validator->fails() ) {
            return redirect('/login')
                    ->with(['errors' => 'Dados inválidos.'])
                    ->withInput();
        }

        $credentials = ['email'=>$request->get('email'),'password'=>$request->get('password')];

        if      ( auth()->guard('aluno')->attempt($credentials) ){
            return redirect('/minhas-turmas');
        }
        elseif  ( auth()->guard('prof')->attempt($credentials) ){
            return redirect('/gerenciar-turmas');
        }
         else {
            return redirect('/login')
                    ->with(['errors' => 'Login inválido.'])
                    ->withInput();
        }
        
    }

    public function cadastro(Request $request){

        $validator1 = validator($request->all(), [
            'email' => 'required|min:3|max:100',
            'password' => 'required|min:3|max:100',
        ]);

        $validator2 = validator($request->all(),[
            'password2'     => 'required|same:password',
        ]);

        if ($validator1->fails()) {
            return redirect('login')
                        ->with('errors', 'Novo usuário não cadastrado: senha pequena demais')
                        ->withInput();
        }
        elseif ($validator2->fails()) {
            return redirect('login')
                        ->with('errors', 'Novo usuário não cadastrado: falha na confirmação de senha.')
                        ->withInput();
        }else{

            if  ($request->input('tipo-perfil') == '1'){
                $validator3 = validator($request->all(),[
                    'email' => 'unique:professors',
                ]);
                if ($validator3->fails()) {
                    return redirect('login')
                                ->with('errors', 'Novo usuário não cadastrado: email já cadastrado.')
                                ->withInput();
                }
                else{
                    $dataForm = [
                        'nome'      => '',
                        'email'     => $request->get('email'),
                        'password'  => bcrypt($request->get('password')),
                        'permission_user_id' => '1'
                    ];
                    $professor = new Professor;
                    $professor->insert($dataForm);       
                    return redirect()->to('login')
                            ->with('sucesso', 'Novo usuário cadastrado com sucesso!')
                            ->withInput();
                }

            }elseif  ($request->input('tipo-perfil') == '2'){
                $validator3 = validator($request->all(),[
                    'email' => 'unique:alunos',
                ]);
                if ($validator3->fails()) {
                    return redirect('login')
                                ->with(['errors' => 'Novo usuário não cadastrado: email já cadastrado.'])
                                ->withInput();
                }
                else{
                    $dataForm = [
                        'nome'      => '',
                        'email'     => $request->get('email'),
                        'password'  => bcrypt($request->get('password')),
                        'permission_user_id' => '2'
                    ];
                    $aluno = new Aluno;
                    $aluno->insert($dataForm);       
                    return redirect()->to('login')
                            ->with('sucesso', 'Novo usuário cadastrado com sucesso!')
                            ->withInput();
                }
            }

        }





    











        $credentials = ['email'=>$request->get('email'),'password'=>$request->get('password')];

        if(Auth::create($credenciais)){
            return "Usuario ". $credenciais->input('nome ')."Cadastrado com sucesso";
        }

    }


    public function logoutAluno(){
        auth()->guard('aluno')->logout();
        return redirect('/');
    }
    public function logoutProf(){
        auth()->guard('prof')->logout();
        return redirect('/');

    }



}
