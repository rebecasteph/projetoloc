<?php

use Illuminate\Support\Facades\Route;

Route::get('/inicial-prof', 'ProfController@inicial');

Route::get('gerenciar-turmas', 'ProfController@listaTurmasProf');
Route::get('config-turma', 'ProfController@configTurma');
Route::get('perfil-do-professor', 'ProfController@telaPerfilProf');

