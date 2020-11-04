<?php

use Illuminate\Support\Facades\Route;

Route::get('/inicial', 'AlunoController@inicial');

Route::get('/missao-aluno/nome-missao','AlunoController@missaoAluno');

Route::get('/fase-do-chefao/nome-fase','AlunoController@faseAluno');

Route::get('minhas-turmas', 'AlunoController@listaTurmas');
Route::get('meu-perfil', 'AlunoController@telaPerfilAluno');