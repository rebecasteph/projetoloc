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
                    <div class="form-sm mb-4">                                    
                        <input type="text" class="form-control" id="cod-addturma" placeholder="Inserir código" required>
                    </div>
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
                    <form class="hero-selector container-fluid p-0">
                        <div class="row">

                        
                        <div class="col-md-4">
                            <input id="heroi-1" type="radio" name="selecionar-heroi" value="heroi-1" />
                            <label class="selecao-heroi heroi-1" for="heroi-1"></label>
                        </div>
                        <div class="col-md-4">
                            <input id="heroi-2" type="radio" name="selecionar-heroi" value="heroi-2" />
                            <label class="selecao-heroi heroi-2"for="heroi-2"></label>
                        </div>
                        <div class="col-md-4">
                            <input id="heroi-3" type="radio" name="selecionar-heroi" value="heroi-3" />
                            <label class="selecao-heroi heroi-3"for="heroi-3"></label>
                        </div>
                    </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="button is-white" data-dismiss="modal">Cancelar</button>
                    <a href="/aluno/turma/inicial">
                        <button class="button is-primary is-outlined">Escolher</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="card text-center">
        <div class="card-header roxo"><span>Nome da Instituição</span></div>
        <div class="card-body">
            <h5 class="card-title">Nome da Turma</h5>
            <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
            <a href="/aluno/turma/inicial">
                <button class="button is-primary is-outlined"> Visitar</button>
            </a>
        </div>
    </div>

    <br>
    <div class="card text-center">
        <div class="card-header roxo"><span>Nome da Instituição</span></div>
        <div class="card-body">
            <h5 class="card-title">Nome da Turma</h5>
            <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
            <a href="/aluno/turma/inicial">
                <button class="button is-primary is-outlined"> Visitar</button>
            </a>
        </div>
    </div>

    <br>
    <div class="card text-center">
        <div class="card-header roxo"><span>Nome da Instituição</span></div>
        <div class="card-body">
            <h5 class="card-title">Nome da Turma</h5>
            <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
            <a href="/aluno/turma/inicial">
                <button class="button is-primary is-outlined"> Visitar</button>
            </a>
        </div>
    </div>



</div>
@endsection