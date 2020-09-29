@extends('template')
 
 @section('title', 'Nome Fase do Chefão')
   
 @section('content')
 <div class="nav nav-sec" aria-label="breadcrumb">
     <p>Nome da Turma</p>
     <span>/Fase do Chefão</span>
     <span>/Nome do Desafio</span>
 </div>
 <div class="area-fase-chefao">

     <!-- Botão para voltar -->
     <a href="{{ url('/inicial') }}">
        <button type="button" class="btn btn-roxo"><span class="fas fa-angle-double-left"></span></button>
     </a> 

    <!-- Botão para acionar modal -->
    <button type="button" class="btn btn-roxo" data-toggle="modal" data-target="#quest-fase">
        Abrir modal de demonstração
    </button>

    <!-- Modal -->
    <div class="modal fade" id="quest-fase" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                    <div class="col-auto">
                        <h5 class="modal-title">Nome da Fase</h5>
                        <div class="row show-moblie">
                            <div class="col-auto tags has-addons mb-0">
                                <span class="tag is-dark mb-0">XP</span>
                                <span class="tag is-warning mb-0">33</span>
                            </div>
                            <div class="col-auto tags has-addons mb-0">
                                <span class="tag is-dark mb-0">HP</span>
                                <span class="tag is-danger mb-0">15</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="row justify-content-end">
                            <div class="col-auto tags has-addons mb-0 none-mobile">
                                <span class="tag is-dark mb-0">PB</span>
                                <span class="tag is-warning mb-0">33</span>
                            </div>
                            <div class="col-auto tags has-addons mb-0 none-mobile">
                                <span class="tag is-dark mb-0">XP</span>
                                <span class="tag is-danger mb-0">15</span>
                            </div>
                        </div>

                    </div>
                </div>

                @include('telaAluno.chefao.painelQuestFase')
            </div>
        </div>
    </div>
 
 </div>
  
 @endsection