<div class="pt-4">
    <form class="needs-validation" novalidate>
        <div class="form-row mb-3">
            <div class="col-md-3">
                <label>Código da Turma: <strong>{{$turma->codigo}}</strong></label>
            </div>
            <div class="col-md-4">
                <article class="message is-small is-info">
                    <div class="message-body p-2">
                        Copie e compartilhe o código com seus alunos.
                    </div>
                </article>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-7 mb-3">
                <label>Nome da turma</label>
                <input type="text" class="form-control" value="{{$turma->nome}}"  id="nome-turma" placeholder="Nome da Turma"required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-7 mb-3">
                <label>Instituição vinculada</label>
                <input type="text" class="form-control" value="{{$turma->instituicao}}" id="nome-instituicao" placeholder="Instituição" required>
                <div class="invalid-feedback">
                    Por favor, informe um e-mail válido.
                </div>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-center">
            <button class="btn btn-roxo" type="submit">Enviar</button>
        </div>
    </form>
</div>
