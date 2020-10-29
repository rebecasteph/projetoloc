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
                        <input type="text" class="form-control" id="cod-addturma" placeholder="Inserir nome da turma" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button is-white" data-dismiss="modal">Cancelar</button>
                    <a href="config-turma">
                        <button class="button is-primary" >Adicionar Turma</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="card text-center">
        <div class="card-header roxo">
            <span>Nome da Instituição</span>
            <a href="inicial" class="button is-small is-primary is-outlined"><i class="fas fa-pen"></i> </a>
        </div>
        <div class="card-body">
            <h5 class="card-title">Nome da Turma</h5>
            <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
            <a href="inicial">
                <button class="button is-primary is-outlined">Visitar</button>
            </a>

        </div>
        <footer class="card-footer">
            <a href="#" class="card-footer-item">Abrir</a>
            <a href="#" class="card-footer-item">Configurações</a>
        </footer>
    </div>

    <br>



</div>
@endsection