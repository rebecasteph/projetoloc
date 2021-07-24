<div class="col-md-4" style="position: absolute; right: 16px;">
    <article class="mt-4 message is-info">
        <div class="message-body p-2">
        Crie e edite pontuações bônus e penalidades que poderão ser atribuídas.
        </div>
    </article>
</div>

<div class="row pt-5">
    <div class="col-sm-6">
        <h4><span class="badge badge-danger">- XP</span></h4>
        <table class="table table-sm mb-0">
            <thead>
                <tr>
                    <th scope="col">Valor</th>
                    <th scope="col" style="width: 75%">Descrição</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
            @forelse($n_sentencas as $sentenca)
                <tr>
                    <td>{{$sentenca->valor}}</td>
                    <td>{{$sentenca->descr}}</td>
                    <td> 
                        <div class="d-flex">
                            <button  type="button" class="mb-3 mr-1 btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#exampleModal" 
                            data-idsentenca="{{$sentenca->id}}" data-idturma="{{$sentenca->turma_id}}" data-valor="{{$sentenca->valor}}" data-descr="{{$sentenca->descr}}">
                                <i class="fa fas fa-pen"></i>
                            </button> 
                            <form action="{{url('/deletesentenca', $sentenca->id )}}" method="POST">
                                {!! csrf_field() !!}
                                {!! Form::hidden('tab_id',   'painel-sentencas'   )!!}
                                <button class="btn btn-sm btn-outline-danger" type="submit">
                                    <i class="fa fas fa-trash"></i>
                                </button> 
                            </form>
                        </div>
                    </td>
                </tr>

                <!-- MODEL EDIT NEGATIVA -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar sentença</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span class="badge badge-danger">- XP</span>
                        <form method="POST" action="{{url('/editsentenca')}}">
                            {!! csrf_field() !!}

                            {!! Form::hidden('tab_id',   'painel-sentencas'   )!!}
                            {!! Form::hidden('sent_id',    $sentenca->id        )!!}
                            {!! Form::hidden('turma_id',   $sentenca->turma_id  )!!}
                                                        
                            <div class="form-group">
                                <label class="col-form-label">Valor:</label>
                                <input name="valor" type="text" class="form-control" id="recipient-valor">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Descrição:</label>
                                <textarea  name="descr" class="form-control" id="recipient-descr"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-roxo">Alterar</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
                <!-- END MODEL -->
            @empty
            <span>Nenhuma sentença cadastrada</span>
            @endforelse
            </tbody>
        </table>
        <hr class="mt-0">
        <div class="d-flex justify-content-center">
            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#add-sentenca"><i class="fa fas fa-plus"></i></button>
        </div>
    </div>

    <div class="col-sm-6">
        <h4><span class="badge badge-warning">+ XP</span></h4>
        <table class="table table-sm mb-0">
            <thead>
                <tr>
                    <th scope="col">Valor</th>
                    <th scope="col" style="width: 75%">Descrição</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
            @forelse($p_sentencas as $sentenca2)
            <tr>
                <td>{{$sentenca2->valor}}</td>
                <td>{{$sentenca2->descr}}</td>
                <td> 
                    <div class="d-flex">
                        <button type="button" class="mb-3 mr-1 btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#exampleModal2" 
                        data-idsentenca="{{$sentenca2->id}}" data-idturma="{{$sentenca2->turma_id}}" data-valor="{{$sentenca2->valor}}" data-descr="{{$sentenca2->descr}}">
                            <i class="fa fas fa-pen"></i>
                        </button> 
                        <form action="{{url('/deletesentenca', $sentenca->id )}}" method="POST">
                            {!! csrf_field() !!}
                            {!! Form::hidden('tab_id',   'painel-sentencas'   )!!}
                            <button class="btn btn-sm btn-outline-danger" type="submit">
                                <i class="fa fas fa-trash"></i>
                            </button> 
                        </form>
                    </div>
                </td>
            </tr class="mt-0">

            <!-- MODEL EDIT POSITIVA -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Editar sentença</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span class="badge badge-warning">+ XP</span>
                        <form method="POST" action="{{url('/editsentenca')}}">
                            {!! csrf_field() !!}

                            {!! Form::hidden('tab_id',   'painel-sentencas'   )!!}
                            {!! Form::hidden('sent_id',    $sentenca2->id        )!!}
                            {!! Form::hidden('turma_id',   $sentenca2->turma_id  )!!}
                                                        
                            <div class="form-group">
                                <label class="col-form-label">Valor:</label>
                                <input name="valor" type="text" class="form-control" id="recipient-valor2">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Descrição:</label>
                                <textarea  name="descr" class="form-control" id="recipient-descr2"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-roxo">Alterar</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            <!-- END MODEL -->
            @empty
            <span>Nenhuma sentença cadastrada</span>
            @endforelse
            </tbody>
        </table>
        <hr class="mt-0">
        <div class="d-flex justify-content-center">
            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#add-sentenca"><i class="fa fas fa-plus"></i></button>
        </div>
    </div>

    <!-- MODEL CREATE -->
    <div class="modal fade" id="add-sentenca" tabindex="-1" role="dialog" aria-labelledby="createsentenca" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nova sentença</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{url('/novasentenca')}}">
                    {!! csrf_field() !!}

                    {!! Form::hidden('tab_id',   'painel-sentencas'   )!!}
                    {!! Form::hidden('turma_id',   $sentenca->turma_id  )!!}

                    <!-- TIPO SENTENCA -->
                    <div class="d-flex justify-content-around md-form form-sm mb-2">
                        <div class="form-check">
                            <input class="form-check-input" id="tipo-positiva" type="radio" name="tipo" value="positiva" checked>
                            <label>Positiva</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="tipo-negativa" type="radio" name="tipo" value="negativa">
                            <label>Negativa</label>
                        </div>
                    </div>

                    <!-- DADOS -->
                    <div class="form-group">
                        <label class="col-form-label">Valor:</label>
                        <input name="valor" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Descrição:</label>
                        <textarea  name="descr" class="form-control"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-roxo">Salvar</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <!-- END MODEL -->



</div>


<script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function (event) {
    var button          = $(event.relatedTarget)    // Botão que acionou o modal
    var recipientvalor  = button.data('valor')      // Extrai informação dos atributos data-*
    var recipientdescr  = button.data('descr')      // Extrai informação dos atributos data-*
    var modal = $(this)
    modal.find('#recipient-valor').val(recipientvalor)
    modal.find('#recipient-descr').val(recipientdescr)
    })
</script>

<script type="text/javascript">
    $('#exampleModal2').on('show.bs.modal', function (event) {
    var button          = $(event.relatedTarget)    // Botão que acionou o modal
    var recipientvalor  = button.data('valor')      // Extrai informação dos atributos data-*
    var recipientdescr  = button.data('descr')      // Extrai informação dos atributos data-*
    var modal = $(this)
    modal.find('#recipient-valor2').val(recipientvalor)
    modal.find('#recipient-descr2').val(recipientdescr)
    })
</script>



