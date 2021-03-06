<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'prof'], function() {
    Route::group(['middleware' => 'auth:prof'], function() {
        Route::get('/gerenciar-turmas',         'TurmaController@listaTurmaProf');
        Route::get('/prof/turma-{id}/inicial',  'TurmaController@inicialProf');
        Route::get('/config-turma/{id}',        'TurmaController@configTurma');
        Route::get('/professor/meu-perfil',     'ProfController@telaPerfilProf');
        Route::get('/professor/logout',         'Controller@logoutProf');
        
        Route::resource('turma',                'TurmaController');
        Route::resource('prof',                 'ProfController');
        Route::resource('participa',            'Aluno_participaController');
        Route::resource('missao',               'MissaoController');
        Route::resource('fase',                 'FaseController');
        
        Route::post('/novasentenca',             'TurmaController@createSentenca');
        Route::post('/editsentenca',             'TurmaController@editSentenca');
        Route::post('/deletesentenca/{id}',             'TurmaController@deleteSentenca');

        Route::get('/getsentenca/{id}',          'TurmaController@getSentenca');

        Route::post('/atribsentenca',             'Aluno_participaController@atribSentenca');
    }); 
    
});

Route::group(['middleware' => 'aluno'], function() {
    Route::group(['middleware' => 'auth:aluno'], function() {
        //Route::redirect('/aluno/{id}/fase-do-chefao/minhas-turmas','/minhas-turmas',301);
        Route::get('/minhas-turmas',                        'Aluno_participaController@listaTurmaAluno');
        Route::get('/aluno/{id}/inicial',                   'Aluno_participaController@inicialAluno');
        Route::get('/aluno/{id}/regras',                   'Aluno_participaController@regras');
        Route::get('/aluno/{id}/missao-aluno/nome-missao',  'AlunoController@missaoAluno');
        Route::get('/aluno/{id}/fase-do-chefao/nome-fase',  'AlunoController@faseAluno');
        Route::get('/meu-perfil',                           'AlunoController@telaPerfilAluno');
        Route::get('/aluno/logout',                         'Controller@logoutAluno');
        
        Route::resource('participa',                        'Aluno_participaController');
        Route::resource('alunoo',                           'AlunoController');

    });

});


Route::get('/', 'Controller@index')->name('/');

Route::get('/login',          'Controller@login');
Route::post('/login',     'Controller@postLogin');
Route::post('/cadastro',     'Controller@cadastro');



