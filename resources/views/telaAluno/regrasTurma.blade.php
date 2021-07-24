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
        <!-- CONTENT -->
        <div class="tab-content">
            <div class="tab-pane fade" id="painel-sentencas" role="tabpanel" aria-labelledby="sentencas-tab">
            <!-- SENTENCAS -->
            <div class="row pt-5">
                <div class="col-sm-6">
                    <h4><span class="badge badge-danger">- XP</span></h4>
                    <table class="table table-sm mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Valor</th>
                                <th scope="col" style="width: 75%">Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($n_sentencas as $sentenca)
                            <tr>
                                <td>{{$sentenca->valor}}</td>
                                <td>{{$sentenca->descr}}</td>
                            </tr>

                        @empty
                        <span>Nenhuma sentença cadastrada</span>
                        @endforelse
                        </tbody>
                    </table>
                    <hr class="mt-0">
                </div>

                <div class="col-sm-6">
                    <h4><span class="badge badge-warning">+ XP</span></h4>
                    <table class="table table-sm mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Valor</th>
                                <th scope="col" style="width: 75%">Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($p_sentencas as $sentenca2)
                        <tr>
                            <td>{{$sentenca2->valor}}</td>
                            <td>{{$sentenca2->descr}}</td>
                        </tr class="mt-0">

                        @empty
                        <span>Nenhuma sentença cadastrada</span>
                        @endforelse
                        </tbody>
                    </table>
                    <hr class="mt-0">
                </div>
            </div>
















            </div>
            <!-- PAINEL ELOS -->
            <div class="tab-pane fade pl-5 pr-5 show active" id="painel-elos" role="tabpanel" aria-labelledby="elos-tab">
                @include('painel-elos')
            </div>
        </div>
    </div>
</div>
@endsection