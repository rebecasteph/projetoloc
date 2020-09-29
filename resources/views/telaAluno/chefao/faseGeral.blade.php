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
    <button type="button" class="btn btn-roxo bnt-go-quest" data-toggle="modal" data-target="#quest-fase">
        Abrir modal de demonstração
    </button>

    <!-- Modal -->
    <div class="modal fade" id="quest-fase" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                @include('telaAluno.chefao.painelQuestFase')
            </div>
        </div>
    </div>

    <div class="barra-hp-fase" style="">
        oi
    </div>
 
 </div>
  
 @endsection