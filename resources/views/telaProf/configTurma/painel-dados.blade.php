<div class="pt-4">
    <form class="needs-validation" method="PATCH" action="{{route('turma.update', $turma->id)}}" novalidate>
        {!! csrf_field() !!}
        <div class="form-row mb-3">
            <div class="col-md-3">
                <h5><small>Código da Turma:</small> <strong>{{$turma->codigo}}</strong></h5>
            </div>
            <div class="col-md-5">
                <article class="message is-info">
                    <div class="message-body p-2">
                        Copie e compartilhe o código com seus alunos.
                    </div>
                </article>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-7 mb-3">
                <label>Nome da turma</label>
                <input type="text" class="form-control" value="{{$turma->nome}}"  name="nome" placeholder="Nome da Turma"required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-7 mb-3">
                <label>Instituição vinculada</label>
                <input type="text" class="form-control" value="{{$turma->instituicao}}" name="instituicao" placeholder="Nome da instituição" required>
                <div class="invalid-feedback">
                    Por favor, informe um e-mail válido.
                </div>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-center">
            <button class="btn btn-roxo">Salvar</button>
        </div>
    </form>
</div>
