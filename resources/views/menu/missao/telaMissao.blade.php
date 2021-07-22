@extends('template')
 
@section('title', 'Nome Missão')
  
@section('content')
<div class="nav nav-sec" aria-label="breadcrumb">
    <p>Nome da Turma</p>
    <span>/Nome da Missão</span>
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
    <a href="{{url("/aluno/$id/inicial")}}">
    <button type="button" class="btn btn-roxo"><span class="fas fa-angle-double-left"></span></button>
    </a> 

    <div class="item-missao" style="top: 30%; left: 10%;">
        <span class="d-block icon-tarefa rounded-circle fas fa-home p-2 mx-auto text-center" data-toggle="modal" data-target="#modalExemplo"></span>
        <span class="d-block mx-auto text-center font-weight-bold nome-tarefa">Nome 1 da Tarefa</span>
    </div>

    <div class="item-missao" style="top: 50%; left: 20%;">
        <span class="d-block icon-tarefa rounded-circle fas fa-map-marker-alt p-2 mx-auto text-center" data-toggle="modal" data-target="#modalExemplo"></span>
        <span class="d-block mx-auto text-center font-weight-bold nome-tarefa">Nome 2 da Tarefa</span>
    </div>

    
    <!-- Modal -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-auto">
                        <h5 class="modal-title">Título da Atividade</h5>
                        <div class="row show-mobile">
                            <div class="col-auto tags has-addons mb-0">
                                <span class="tag is-dark mb-0">XP</span>
                                <span class="tag is-warning mb-0">15</span>
                            </div>
                            <div class="col-auto tags has-addons mb-0">
                                <span class="tag is-dark mb-0">PB</span>
                                <span class="tag is-warning mb-0">33</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="row justify-content-end">
                            <div class="col-auto tags has-addons mb-0 none-mobile">
                                <span class="tag is-dark mb-0">XP</span>
                                <span class="tag is-warning mb-0">15</span>
                            </div>
                            <div class="col-auto tags has-addons mb-0 none-mobile">
                                <span class="tag is-dark mb-0">PB</span>
                                <span class="tag is-warning mb-0">33</span>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-body">
                    @include('menu.missao.painelAtvAluno')
                </div>
            </div>
        </div>
    </div>



</div>
 
@endsection