<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view ('welcome');
    }
    public function inicial(){
        return view('inicial');
    }
    public function missaoAluno(){
        return view ('telaAluno.missao.telaMissao');
    }
    public function faseAluno(){
        return view ('telaAluno.chefao.faseGeral');
    }
}
