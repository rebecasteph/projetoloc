@extends('template')
 
@section('title', 'Meu Perfil')
  
@section('content')

<div class="container mt-4 w-75 tab-pane-tela" style="margin: 0 auto;" >
    @if(session('sucesso'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <h5>{{session('sucesso')}}</h5>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif


    <h3>Meu perfil</h3>
    <hr>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
            <div class="panel panel-default">
                @can('menu_aluno')
                <div class="panel-heading">Turmas<i class="fa fas fa-award fa-1x"></i></div>
                @endcan
                @can('menu_professor')
                <div class="panel-heading">Turmas <i class="fas fa-chalkboard-teacher fa-1x"></i></div>
                @endcan
                <div class="panel-body">
                    <ul class="list-group">
                    @can('menu_aluno')
                        @forelse($all_participa as $participa)
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>{{$participa->turma->nome}}</strong>
                                <span class="badge badge-pill badge-success">Nível {{intval($participa->xp_aluno/$participa->turma->up_xp_aluno)}}</span>
                            </span>
                        </li>
                        @empty
                        <span class="pull-left">
                            <strong>Nenhuma turma cadastrada</strong>
                        </span>
                        @endforelse
                    @endcan
                    @can('menu_professor')
                        @forelse($turmas as $aturma)
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>{{$aturma->nome}}</strong>
                            </span>
                        </li>
                        @empty
                        <span class="pull-left">
                            <strong>Nenhuma turma cadastrada</strong>
                        </span>
                        @endforelse
                    @endcan
                    </ul> 
                </div>
            </div>
        </div><!--/col-3-->

    	<div class="col-sm-9">
            <form class="needs-validation" method="PATCH" action="{{route('alunoo.update', auth()->user()->id)}}" novalidate>
                {!! csrf_field() !!}
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Primeiro nome</label>
                        <input type="text" class="form-control" placeholder="Nome" name="nome" value="{{auth()->user()->nome}}" required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Sobrenome</label>
                        <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" value="xxx" required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>E-mail</label>
                        <input type="text" class="form-control"  placeholder="e-mail" name="email" value="{{auth()->user()->email}}" required>
                        <div class="invalid-feedback">
                            Por favor, informe um e-mail válido.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 align-self-end">
                        <a class="not-active " href="">Recuperar senha</a>
                    </div>
                </div>
                
                <div class="form-row collapse" id="novasenha">
                    <div class="card card-body">
                        <div class="d-flex">
                            <div class="col-md-6 mb-3">
                                <label>Senha</label>
                                <input type="text" class="form-control" name="password" >
                                <!-- <div class="invalid-feedback">
                                    Por favor, informe sua senha atual.
                                </div> -->                   
                            </div>
                            <!-- <div class="col-md-6 mb-3">
                                <label>Nova Senha</label>
                                <input type="text" class="form-control" name="nova-senha-1" placeholder="" required>
                                <div class="invalid-feedback">
                                    Por favor, informe uma nova senha válida.
                                </div>
                                <label>Confirme a senha</label>
                                <input type="text" class="form-control" name="nova-senha-2" placeholder="" required>
                                <div class="invalid-feedback">
                                    Por favor, informe uma nova senha válida.
                                </div>
                            </div> -->
                        </div>
                    </div>

                </div>
                <hr>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-roxo">Salvar</button>
                </div>
            </form>
        </div>

              
    </div><!--/row-->


    <!-- REVER -->
    <script>
        // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
            var forms = document.getElementsByClassName('needs-validation');
            // Faz um loop neles e evita o envio
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
    </script>



</div>
@endsection