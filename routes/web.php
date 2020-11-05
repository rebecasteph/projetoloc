<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'prof'], function() {
    Route::get('/prof/turma/inicial', 'ProfController@inicial');

    Route::get('/gerenciar-turmas', 'ProfController@listaTurmasProf');
    Route::get('/config-turma', 'ProfController@configTurma');
    Route::get('/perfil-do-professor', 'ProfController@telaPerfilProf');

});

Route::group(['middleware' => 'aluno'], function() {
    Route::get('/aluno/turma/inicial', 'AlunoController@inicial');

    Route::get('/missao-aluno/nome-missao','AlunoController@missaoAluno');
    Route::get('/fase-do-chefao/nome-fase','AlunoController@faseAluno');
    Route::get('/minhas-turmas', 'AlunoController@listaTurmas');
    Route::get('/meu-perfil', 'AlunoController@telaPerfilAluno');
});


Route::get('/', 'Controller@index');
Route::get('/login', 'Controller@login');
Route::post('/login', 'AlunoController@postLogin');



