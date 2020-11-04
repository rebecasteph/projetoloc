<?php

use Illuminate\Support\Facades\Route;

/* Route::group(['middleware' => 'prof'], fuction(){
    Route::get('/', 'ProfController@index');
});
 */

Route::get('/', 'Controller@index');

Route::get('/login', 'Controller@login');
Route::post('/login', 'Controller@postLogin');

/* Route::group(['prefix' => 'missao-aluno'],function(){
    Route::get('/nome-missao','Controller@missaoAluno');
});

Route::group(['prefix' => 'fase-do-chefao'],function(){
    Route::get('/nome-fase','Controller@faseAluno');
});

Route::get('minhas-turmas', 'Controller@listaTurmas');
Route::get('meu-perfil', 'Controller@telaPerfilAluno');
 */

/* Route::get('gerenciar-turmas', 'Controller@listaTurmasProf');
Route::get('config-turma', 'Controller@configTurma');
Route::get('perfil-do-professor', 'Controller@telaPerfilProf');
 */