@extends('template')
 
@section('title', 'Regras da Turma')
  
@section('content')
<div class="container">


<div class="container tab-pane-tela mt-4" style="margin: 0 auto;" > 
    <h3>Regras da Turma<small class="text-muted">{{$turma->nome}}</small></h3>
    <hr>

    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link" id="sentencas-tab" data-toggle="tab" href="#painel-sentencas" role="tab" aria-controls="painel-sentencas" aria-selected="false">Sentenças</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" id="elos-tab" data-toggle="tab" href="#painel-elos" role="tab" aria-controls="contact" aria-selected="painel-elos">Elos de Equipe</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade" id="painel-sentencas" role="tabpanel" aria-labelledby="sentencas-tab">@include('telaprof.configTurma.painel-sentencas')</div>
        <div class="tab-pane fade pl-5 pr-5 show active" id="painel-elos" role="tabpanel" aria-labelledby="elos-tab">@include('telaAluno.regras.painel-elos')</div>
    </div>


</div>

</div>


@endsection