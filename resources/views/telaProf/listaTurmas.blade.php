@extends('template')
 
@section('title', 'Minhas Turmas')
  
@section('content')

<div class="container w-75 tab-pane-tela" style="margin: 0 auto;" > 

    <br>
    <div class="d-flex justify-content-end">
        <button class="button is-primary" data-toggle="modal" data-target="#addturma">
             <span><i class="fas fa-plus-circle"></i> Nova Turma</span>
        </button>
    </div>

    <!-- Modal Nova Turma-->
    <div class="modal fade" id="addturma" tabindex="-1" role="dialog" aria-labelledby="addturma" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nova Turma</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-sm mb-4">                                    
                        <input type="text" class="form-control" id="cod-addturma" placeholder="Inserir nome da turma" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button is-white" data-dismiss="modal">Cancelar</button>
                    <a href="{{route('turma.create')}}">
                        <button class="button is-primary" >Adicionar Turma</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    @forelse($turmas as $turma)
    @can('acesso-turma-prof', $turma)
    <br>
    <div class="card">
        <div class="card-header roxo justify-content-between">
            <span>{{$turma->instituicao}} - {{$turma->professor->nome}}</span>
            <a class="" href="{{url("config-turma/$turma->id")}}">
                <button class="button is-small is-primary is-outlined fas fa-pen"></button>
            </a>
        </div>
        <div class="card-body row">
            <div class="col-md-8">
                <h5 class="card-title mb-0">{{$turma->nome}}</h5>
            </div>
            <div class="col-md-3">
                <div class="d-flex justify-md-content-end align-items-center">
                    <div class="tags has-addons mt-2 mr-2 mb-0">
                        <span class="tag is-dark fas fa-users"></span>
                        <span class="tag is-primary">{{$alunos}}</span>
                    </div>
                    <div class="tags has-addons">
                        <span class="tag is-dark far fa-clipboard"></span>
                        <span class="tag is-primary">$qtde</span>
                    </div>
                </div>
            </div>
            <div class="col-md-1 pl-md-0">
                <a href="{{url("/prof/turma-$turma->id/inicial")}}">
                    <button class="button is-primary is-outlined">Abrir</button>
                </a>            
            </div>

        </div>

    </div>
    @endcan
    @empty
    <h1>Nenhuma turma cadastrada</h1>

    @endforelse




</div>
@endsection