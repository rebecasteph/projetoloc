@extends('template')
 
@section('title', 'Configurar Turma')
  
@section('content')
<div class="container tab-pane-tela mt-4" id="tabconf" style="margin: 0 auto;" > 
    <h3>Configurações de Turma<small class="text-muted">{{$turma->nome}}</small></h3>
    <hr>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="dados-tab" data-toggle="tab" href="#painel-dados" role="tab" aria-controls="painel-dados" aria-selected="true">Dados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="alunos-tab" data-toggle="tab" href="#painel-alunos" role="tab" aria-controls="painel-alunos" aria-selected="false">Alunos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="regras-tab" data-toggle="tab" href="#painel-regras" role="tab" aria-controls="painel-regras" aria-selected="false">Regras do Jogo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="sentencas-tab" data-toggle="tab" href="#painel-sentencas" role="tab" aria-controls="painel-sentencas" aria-selected="false">Sentenças</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="elos-tab" data-toggle="tab" href="#painel-elos" role="tab" aria-controls="contact" aria-selected="painel-elos">Elos de Equipe</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade pl-5 pr-5 show active" id="painel-dados" role="tabpanel" aria-labelledby="dados-tab">@include('telaprof.configTurma.painel-dados')</div>
        <div class="tab-pane fade pl-5 pr-5" id="painel-alunos" role="tabpanel" aria-labelledby="alunos-tab">@include('telaprof.configTurma.painel-alunos')</div>
        <div class="tab-pane fade pl-5 pr-5" id="painel-regras" role="tabpanel" aria-labelledby="regras-tab">@include('telaprof.configTurma.painel-regras')</div>
        <div class="tab-pane fade" id="painel-sentencas" role="tabpanel" aria-labelledby="sentencas-tab">@include('telaprof.configTurma.painel-sentencas')</div>
        <div class="tab-pane fade pl-5 pr-5" id="painel-elos" role="tabpanel" aria-labelledby="elos-tab">@include('painel-elos')</div>
    </div>

    <script>
        //redirect to specific tab
        $(document).ready(function () {
            $('#tabconf li a[href="#{{ old('tab') }}"]').tab('show')
        });
    </script>


</div>

@endsection