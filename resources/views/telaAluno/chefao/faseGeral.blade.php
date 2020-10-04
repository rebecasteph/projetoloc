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
    <button type="button" class="centralizar btn btn-roxo bnt-go-quest" data-toggle="modal" data-target="#quest-fase">
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

    <div class="d-flex justify-content-between barra-hp-fase">

        <div class="d-inline-flex p-2 flex-fill bd-highlight" style="justify-content: flex-end;">
            <div class="none-mobile"> <img src="https://ptetutorials.com/images/user-profile.png" alt="img-aluno" class="img-hp"> </div>
            <div class="col-md-9">
                <h6>Nome Aluno</h6>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

            </div>
        </div>
        <div class="p-2 mr-md-5 ml-md-5 bd-highlight">
            <img src="{!!asset('img/vs.png')!!}" alt="versus" class="img-hp">
        </div>
        <div class="d-inline-flex p-2 flex-fill bd-highlight">
            <div class="col-md-9 text-right">
            <h6>Nome Monstro</h6>
                <div class="progress" style="direction: rtl;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="none-mobile"> <img src="https://ptetutorials.com/images/user-profile.png" alt="img-chefao"class="img-hp"> </div>
        </div>

    </div>
 <!--         <div class="col-6 pt-3 pb-3">
        </div>
        <div class="col-6 pt-3 pb-3 hp-chefao">
        </div> -->
 </div>
  
 @endsection