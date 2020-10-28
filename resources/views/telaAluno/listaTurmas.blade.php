@extends('template')
 
@section('title', 'Minhas Turmas')
  
@section('content')

<div class="container w-75 tab-pane-tela" style="margin: 0 auto;" > 

    <br>
    <div class="d-flex justify-content-end">
        <button class="button is-primary is-active" data-toggle="modal" data-target="#modalExemplo">
             <span><i class="fas fa-plus-circle"></i> Nova Turma</span>
        </button>
    </div>
    <br>
    <div class="card text-center">
        <div class="card-header roxo"><span>Nome da Instituição</span></div>
        <div class="card-body">
            <h5 class="card-title">Nome da Turma</h5>
            <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
            <a href="inicial" class="button is-primary is-outlined">Visitar</a>
        </div>
    </div>

    <br>
    <div class="card text-center">
        <div class="card-header roxo"><span>Nome da Instituição</span></div>
        <div class="card-body">
            <h5 class="card-title">Nome da Turma</h5>
            <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
            <a href="inicial" class="button is-primary is-outlined">Visitar</a>
        </div>
    </div>

    <br>
    <div class="card text-center">
        <div class="card-header roxo"><span>Nome da Instituição</span></div>
        <div class="card-body">
            <h5 class="card-title">Nome da Turma</h5>
            <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
            <a href="inicial" class="button is-primary is-outlined">Visitar</a>
        </div>
    </div>



</div>
@endsection