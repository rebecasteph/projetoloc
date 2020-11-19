@extends('template')
 
@section('title', 'Minhas Turmas')
  
@section('content')
    @if(session('mensagem'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <h5>{{session('mensagem')}}</h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

<div class="container w-75 tab-pane-tela" style="margin: 0 auto;" > 

    <br>
    <div class="d-flex justify-content-end">
        <button class="button is-primary" data-toggle="modal" data-target="#addturma">
             <span><i class="fas fa-plus-circle"></i> Nova Turma</span>
        </button>
    </div>
    <form class="form-sm" method="post" action="{{route('participa.store')}}">

        <!-- Modal add Código Turma-->
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
                            {!! csrf_field() !!}
                            <input type="text" class="form-control" name="codigo" placeholder="Inserir código" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button is-white" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="button is-primary" data-toggle="modal" data-target="#escolher-heroi">Adicionar Turma</button>
                        </div>
                </div>
            </div>
        </div>
        
        <!-- Modal Escolher Heroi -->
        <div class="modal fade bd-example-modal-xl" id="escolher-heroi" tabindex="-1" role="dialog" aria-labelledby="escolher-heroi" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Escolha seu herói...</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="hero-selector container-fluid p-0">
                            <div class="row">
                                <div class="col-md-4 p-0">
                                    <input id="heroi-1" type="radio" name="heroi" value="heroi-1" />
                                    <label class="selecao-heroi heroi-1" for="heroi-1"></label>
                                </div>
                                <div class="col-md-4 p-0">
                                    <input id="heroi-2" type="radio" name="heroi" value="heroi-2" />
                                    <label class="selecao-heroi heroi-2"for="heroi-2"></label>
                                </div>
                                <div class="col-md-4 p-0">
                                    <input id="heroi-3" type="radio" name="heroi" value="heroi-3" />
                                    <label class="selecao-heroi heroi-3"for="heroi-3"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="button is-white" data-dismiss="modal">Cancelar</button>
                        <a href="">
                            <button class="button is-primary is-outlined">Escolher</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @forelse($all_participa as $participa)
    <br>
    <div class="card text-center">
        <div class="card-header roxo justify-content-between">
            <span>{{$participa->turma->instituicao}}</span>
            <a class="" href="{{url("/aluno/$participa->id/regras")}}">
                <button class="button is-small is-primary is-outlined">Ver regras</button>
            </a>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$participa->turma->nome}}</h5>
            <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
            <a href="{{url("/aluno/$participa->id/inicial")}}">
                <button class="button is-primary is-outlined"> Visitar</button>
            </a>
        </div>
    </div>
    @empty
    <h1>Nenhuma turma cadastrada</h1>

    @endforelse




</div>
@endsection