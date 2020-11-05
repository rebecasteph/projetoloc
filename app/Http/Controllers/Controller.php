<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view ('welcome');
    }
    public function loginAluno(){
        return view('login-aluno');
    }
    public function loginProf(){
        return view('login-prof');
    }

    public function postLoginAluno(Request $request){
        //dd($request->all());
        $validator = validator($request->all(), [
            'email' => 'required|min:3|max:100',
            'password' => 'required|min:3|max:100',
        ]);

        if($validator->fails() ) {
            return redirect('/aluno/login')
                    ->withErrors($validator)
                    ->withInput();
        }

        $credentials = ['email'=>$request->get('email'),'password'=>$request->get('password')];

        if ( auth()->guard('aluno')->attempt($credentials) ){
            return redirect('/minhas-turmas');
        } else {
            return redirect('/aluno/login')
                    ->withErrors(['errors' => 'Login inválido!'])
                    ->withInput();
        }
    }

    public function postLoginProf(Request $request){
        //dd($request->all());
        $validator = validator($request->all(), [
            'email' => 'required|min:3|max:100',
            'password' => 'required|min:3|max:100',
        ]);

        if($validator->fails() ) {
            return redirect('/professor/login')
                    ->withErrors($validator)
                    ->withInput();
        }

        $credentials = ['email'=>$request->get('email'),'password'=>$request->get('password')];

        if ( auth()->guard('prof')->attempt($credentials) ){
            return redirect('/gerenciar-turmas');
        } else {
            return redirect('/professor/login')
                    ->withErrors(['errors' => 'Login inválido!'])
                    ->withInput();
        }
    }


}
