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
                    ->withErrors($validator)
                    ->withInput();
        }

        $credentials = ['email'=>$request->get('email'),'password'=>$request->get('password')];

        if ( auth()->guard('aluno')->attempt($credentials) ){
            return redirect('/inicial');
        } else {
            return redirect('/login')
                    ->withErrors(['errors' => 'Login inválido!'])
                    ->withInput();
        }


    }


}
