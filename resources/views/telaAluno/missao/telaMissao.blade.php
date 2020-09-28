@extends('template')
 
@section('title', 'Nome Missão')
  
@section('content')
<div class="nav nav-sec" aria-label="breadcrumb">
    <p>Nome da Turma</p>
    <span>/Fase do Chefão</span>
    <span>/Nome do Desafio</span>
    <!--
    <form class="form-inline">
        <button type="button" class="roxo btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
            Nova Missão
        </button>
    </form>
    -->
</div>
<div class="area-missao">
    <!-- Botão para voltar -->
    <a href="{{ url('/inicial') }}">
    <button type="button" class="roxo btn btn-primary"><span class="fas fa-angle-double-left"></span></button>
    </a> 

    <div class="item-missao" style="top: 30%; left: 10%;">
        <span class="d-block icon-tarefa roxo rounded-circle fas fa-home p-2 mx-auto text-center" data-toggle="modal" data-target="#modalExemplo"></span>
        <span class="d-block mx-auto text-center font-weight-bold nome-tarefa">Nome 1 da Tarefa</span>
    </div>

    <div class="item-missao" style="top: 50%; left: 20%;">
        <span class="d-block mx-auto text-center font-weight-bold nome-tarefa">Nome 2 da Tarefa</span>
    </div>

    
    <!-- Modal -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Título da Atividade</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Salvar mudanças</button>
            </div>
            </div>
        </div>
    </div>



</div>
 
@endsection