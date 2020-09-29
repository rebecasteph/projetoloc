<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Controller@index');
Route::get('/inicial', 'Controller@inicial');

Route::group(['prefix' => 'missao-aluno'],function(){
    Route::get('/nome-missao','MissaoController@missaoAluno');



});

Route::group(['prefix' => 'fase-do-chefao'],function(){
    Route::get('/nome-fase','FaseController@faseAluno');



});

/* Route::group(['prefix' => 'nome-aluno'], function(){
    Route::get('/meu-heroi','MenuController@heroiAluno')            -> name ('heroiAluno');
    Route::get('/jogadores','MenuController@jogadoresAluno')        -> name('jogadoresAluno');
    Route::get('/equipamentos','MenuController@equipamentosAluno')  -> name('equipamentosAluno');
    Route::get('/fase-do-chefao','MenuController@chefaoAluno')      -> name('chefaoAluno');
    Route::get('/missao','MenuController@missaoAluno')              -> name('missaoAluno');
    Route::get('/chat','MenuController@chatAluno')                  -> name('chatAluno');    
});

Route::group(['prefix' => 'nome-turma'], function(){
    Route::get('/alunos-turma','MenuController@alunosProf')     -> name('alunosProf');
    Route::get('/missao-turma','MenuController@missaoProf')     -> name('missaoProf');
    Route::get('/fase-do-chefao','MenuController@chefaoProf')   -> name('chefaoProf');
    Route::get('/relatorios','MenuController@relatorioProf')    -> name('relatorioProf');
    Route::get('/chat-alunos','MenuController@chatProf')        -> name('chatProf');    
});
 */