<nav>
  <div class="nav nav-tabs justify-content-center" id="nav-tab-atv" role="tablist">
    <a class="nav-item nav-link active" id="nav-atv-tab" data-toggle="tab" href="#nav-atv" role="tab" aria-controls="nav-atv" aria-selected="true">Atividade</a>
    <a class="nav-item nav-link" id="nav-resp-tab" data-toggle="tab" href="#nav-resp" role="tab" aria-controls="nav-resp" aria-selected="false">Resposta</a>
    <a class="nav-item nav-link" id="nav-comm-tab" data-toggle="tab" href="#nav-comm" role="tab" aria-controls="nav-comm" aria-selected="false">Comentários</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <!-- ATIVIDADE -->
  <div class="pt-3 tab-pane fade show active" id="nav-atv" role="tabpanel" aria-labelledby="nav-atv-tab" style="height: 60vh"> 
    <h5 class="text-center">Título Atividade</h5>
    <h6 class="text-center pt-2">Atividade ou conteúdo parcial relacionada aos conteúdos vistos em aula (...) </h6>
  </div>
    <!-- RESPOSTA -->
    <div class="pt-3 tab-pane fade" id="nav-resp" role="tabpanel" aria-labelledby="nav-resp-tab">
        <div>
            <h5 class="text-center pb-3">Suas respostas</h5>
            <div class="input-group pb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Escrever</span>
                </div>
                <textarea class="form-control" aria-label="Com textarea"></textarea>
            </div>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                    <label class="custom-file-label" for="inputGroupFile04">Escolher arquivo</label>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-roxo" type="button" id="inputGroupFileAddon04">Enviar</button>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn light" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-roxo">Salvar mudanças</button>
        </div>
    </div>

    <!-- COMENTÁRIOS -->  
  <div class="pt-3 tab-pane fade" id="nav-comm" role="tabpanel" aria-labelledby="nav-comm-tab">
    <div>
        <div class="card p-3 mb-2">
            <div class="media">
                <img class="coment_img align-self-start mr-3" src="https://ptetutorials.com/images/user-profile.png" alt="Aluno">
                <div class="media-body">
                    <h6 class="m-0">Nome Aluno</h6>
                    <p><small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small></p>
                    <div class="row">
                        <div class="control pr-2">
                            <div class="tags has-addons">
                                <span class="tag is-primary is-light icon"><i class="fas fa-thumbs-up fa-lg"></i></span>
                                <span class="tag is-primary is-light">999</span>
                            </div>
                        </div>
                        <div class="control">
                            <div class="tags has-addons">
                                <span class="tag is-danger is-light icon"><i class="fas fa-thumbs-down fa-lg"></i></span>
                                <span class="tag is-danger is-light">999</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-inline flex-column ml-3">
                    <button class="button is-small is-primary is-rounded">
                        <span class="icon"><i class="fas fa-thumbs-up fa-lg"></i></span>
                    </button>
                    <button class="button is-small is-danger is-rounded">
                        <span class="icon"><i class="fas fa-thumbs-down fa-lg"></i></span>
                    </button>
                </div>

            </div>
        </div>

        <div class="card p-3 mb-2">
            <div class="media">
                <img class="coment_img align-self-start mr-3" src="https://ptetutorials.com/images/user-profile.png" alt="Aluno">
                <div class="media-body">
                    <h6 class="m-0">Nome Aluno</h6>
                    <p><small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small></p>
                    <div class="row">
                        <div class="control pr-2">
                            <div class="tags has-addons">
                                <span class="tag is-primary is-light icon"><i class="fas fa-thumbs-up fa-lg"></i></span>
                                <span class="tag is-primary is-light">999</span>
                            </div>
                        </div>
                        <div class="control">
                            <div class="tags has-addons">
                                <span class="tag is-danger is-light icon"><i class="fas fa-thumbs-down fa-lg"></i></span>
                                <span class="tag is-danger is-light">999</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-inline flex-column ml-3">
                    <button class="button is-small is-primary is-rounded">
                        <span class="icon"><i class="fas fa-thumbs-up fa-lg"></i></span>
                    </button>
                    <button class="button is-small is-danger is-rounded">
                        <span class="icon"><i class="fas fa-thumbs-down fa-lg"></i></span>
                    </button>
                </div>

            </div>
        </div>
    </div>
    <br>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-roxo" type="button" id="button-addon2">Comentar</button>
        </div>
    </div>

  </div>
</div>