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

     <div class="alert alert-warning  alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">Guerreiro, prepare-se!</h4>
        <p>Aêêê! Você conseguiu ler essa mensagem de alerta. Esse texto vai ter quer se extender um pouquinho pra você conseguir ver como o espaçamento dentro de um alerta funciona.</p>
        <hr>
        <p class="mb-0">Sempre que precisar, use utilitários de margem para manter as coisas perfeitas.</p>        
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>


    <!-- Botão para acionar modal -->
    
    <span style="color: #414141; z-index: 1; text-shadow: 0.1em 0.1em 0.1em;position: absolute; left: 50%; top: 47%; transform: translateX(-50%);">press to play</span>
    <button type="button" class="centralizar btn bnt-go-quest" data-toggle="modal" data-target="#quest-fase"></button>

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