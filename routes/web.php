<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'prof'], function() {
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/gerenciar-turmas', 'ProfController@listaTurmasProf');
        Route::get('/prof/turma/inicial', 'ProfController@inicial');
        Route::get('/config-turma', 'ProfController@configTurma');
        Route::get('/perfil-do-professor', 'ProfController@telaPerfilProf');
        Route::get('/professor/logout', 'Controller@logoutProf');

    });
    
    
});

Route::group(['middleware' => 'aluno'], function() {
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/minhas-turmas', 'AlunoController@listaTurmas');
        Route::get('/aluno/turma/inicial', 'AlunoController@inicial');
        Route::get('/missao-aluno/nome-missao','AlunoController@missaoAluno');
        Route::get('/fase-do-chefao/nome-fase','AlunoController@faseAluno');
        Route::get('/meu-perfil', 'AlunoController@telaPerfilAluno');
        Route::get('/aluno/logout', 'Controller@logoutAluno');
    });

});


Route::get('/', 'Controller@index')->name('/');

Route::get('/aluno/login', 'Controller@loginAluno');
Route::post('/aluno/login', 'Controller@postLoginAluno');

Route::get('/professor/login', 'Controller@loginProf');
Route::post('/professor/login', 'Controller@postLoginProf');



