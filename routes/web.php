<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'prof'], function() {
    Route::group(['middleware' => 'auth:prof'], function() {
        Route::get('/gerenciar-turmas', 'ProfController@listaTurmasProf');
        Route::get('/prof/turma-{id}/inicial', 'ProfController@inicial');
        Route::get('/config-turma/{id}', 'ProfController@configTurma');
        Route::get('/perfil-do-professor', 'ProfController@telaPerfilProf');
        Route::get('/professor/logout', 'Controller@logoutProf');

    });
    
    
});

Route::group(['middleware' => 'aluno'], function() {
    Route::group(['middleware' => 'auth:aluno'], function() {
        Route::get('/minhas-turmas', 'AlunoController@listaTurmas');
        Route::get('/aluno/{id}/inicial', 'AlunoController@inicial');

        Route::get('/aluno/{id}/missao-aluno/nome-missao','AlunoController@missaoAluno');
        Route::redirect('/aluno/{id}/missao-aluno/minhas-turmas','/minhas-turmas',301);
        Route::redirect('/aluno/{id}/missao-aluno/meu-perfil','/meu-perfil',301);

        Route::get('/aluno/{id}/fase-do-chefao/nome-fase','AlunoController@faseAluno');
        Route::redirect('/aluno/{id}/fase-do-chefao/minhas-turmas','/minhas-turmas',301);
        Route::redirect('/aluno/{id}/fase-do-chefao/meu-perfil','/meu-perfil',301);

        Route::get('/meu-perfil', 'AlunoController@telaPerfilAluno');
        Route::get('/aluno/logout', 'Controller@logoutAluno');
    });

});


Route::get('/', 'Controller@index')->name('/');

Route::get('/aluno/login', 'Controller@loginAluno');
Route::post('/aluno/login', 'Controller@postLoginAluno');

Route::get('/professor/login', 'Controller@loginProf');
Route::post('/professor/login', 'Controller@postLoginProf');



