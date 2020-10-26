<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Controller@index');

Route::get('inicial', 'Controller@inicial');
Route::get('login', 'Controller@login');

Route::group(['prefix' => 'missao-aluno'],function(){
    Route::get('/nome-missao','Controller@missaoAluno');
});

Route::group(['prefix' => 'fase-do-chefao'],function(){
    Route::get('/nome-fase','Controller@faseAluno');
});

Route::get('minhas-turmas', 'Controller@listaTurmas');
Route::get('meu-perfil', 'Controller@telaPerfilAluno');
