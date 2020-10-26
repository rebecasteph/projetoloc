@extends('template')
 
@section('title', 'Meu Perfil')
  
@section('content')

<div class="container mt-4 w-75 tab-pane-tela" style="margin: 0 auto;" >

    <div class="row">
  		<h3>Meu perfil</h3>
    </div>

    <div class="row">
  		<div class="col-sm-3"><!--left col-->
            <div class="panel panel-default">
                <div class="panel-heading">Turmas <i class="fa fas fa-award fa-1x"></i></div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>Turma Alfa</strong>
                                <span class="badge badge-pill badge-success">Nível 2</span>
                            </span>
                        </li>
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>Turma Base</strong>
                                <span class="badge badge-pill badge-success">Nível 3</span>
                            </span>
                        </li>
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>Turma 1ºC</strong>
                                <span class="badge badge-pill badge-success">Nível 1</span>
                            </span>
                        </li>
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>Turma Matemática</strong>
                                <span class="badge badge-pill badge-success">Nível 5</span>
                            </span>
                        </li>
                    </ul> 
                </div>
            </div>
               
        </div><!--/col-3-->

    	<div class="col-sm-9">
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validar-codigo-aluno">Código do Aluno</label>
                        <input class="form-control" type="text" placeholder="XXX098abc" readonly>                    
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Primeiro nome</label>
                        <input type="text" class="form-control" id="nome-aluno" placeholder="Nome" value="Nome" required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome-aluno" placeholder="Sobrenome" value="Sobrenome" required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>E-mail</label>
                        <input type="text" class="form-control" id="email-aluno" placeholder="e-mail" required>
                        <div class="invalid-feedback">
                            Por favor, informe um e-mail válido.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Senha</label>
                        <input type="text" class="form-control" id="senha" placeholder="" required>
                        <div class="invalid-feedback">
                            Por favor, informe um estado válido.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Nova Senha</label>
                        <input type="text" class="form-control" id="nova-senha-1" placeholder="" required>
                        <div class="invalid-feedback">
                            Por favor, informe um CEP válido.
                        </div>
                        <label>Confirme a senha</label>
                        <input type="text" class="form-control" id="nova-senha-2" placeholder="" required>
                        <div class="invalid-feedback">
                            Por favor, informe um CEP válido.
                        </div>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-end">
                    <button class="btn btn-roxo" type="submit">Enviar</button>
                </div>
            </form>
        </div>

              
    </div><!--/row-->



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