<?php

Route::get('/heroiAluno','MenuController@heroiAluno');
Route::get('/jogadoresAluno','MenuController@jogadoresAluno');
Route::get('/equipamentosAluno','MenuController@equipamentoAlunos');
Route::get('/chefaoAluno','MenuController@chefaoAlluno');
Route::get('/missaoAluno','MenuController@missaoAluno');
Route::get('/chatAluno','MenuController@chatAluno');


Route::get('/alunosProf','MenuController@alunosProf');
Route::get('/missoesProf','MenuController@missõesProf');
Route::get('/chefaoProf','MenuController@chefaoProf');
Route::get('/relatorioProf','MenuController@relatorioProf');
Route::get('/chatProf','MenuController@chatProf');



