<div class="pt-4">
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Sentenças</th>
                <th scope="col">XP</th>
                <th scope="col" class="elo-equipe-turma">Equipe</th>
                <th scope="col" class="pb">PB</th>
            </tr>
        </thead>
        <tbody>
            @forelse($alunos as $aluno)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$aluno->aluno->nome}}</td>
                <td> 
                    <button class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#sentencapositiva"
                        data-idturma="{{$turma->id}}" data-idaluno="{{$aluno->aluno->id}}">
                        <i class="fa fas fa-plus"></i>
                    </button> 
                    <button class="btn btn-sm btn-outline-danger"  data-toggle="modal" data-target="#sentencanegativa"
                        data-idturma="{{$turma->id}}" data-idaluno="{{$aluno->aluno->id}}">
                        <i class="fa fas fa-minus"></i>
                    </button> 
                </td>
                <td>{{$aluno->xp_aluno}}</td>
                <td class="elo-equipe-turma"><img class="escudo-elo-sm " src="{!!asset('img/elos/elo_Mitico.png')!!}" alt="elo"></th>
                <td class="pb">{{$aluno->pb_aluno}}</td>
            </tr>
            <!-- Modal SENTENÇA POSITIVA -->
            <div class="modal fade" id="sentencapositiva" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Atribuir sentença positiva</h5>
                            
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body"><span class="badge badge-warning">+ XP</span>
                            <form action="{{url('/atribsentenca')}}" method="post">
                            {!! csrf_field() !!}
                            {!! Form::hidden('tab_id',          'painel-alunos'     )!!}
                            {!! Form::hidden('participa_id',    $aluno->id         )!!}
                            {!! Form::hidden('tipo',            'positiva'          )!!}
                                <div class="form-group">
                                    <label for="">Selecionar sentença</label>
                                    <select id="valorsentencap" class="form-control">
                                        <option value="">--  Selecione  --</option>
                                    @forelse($p_sentencas as $sentenca)
                                        <option value="{{$sentenca->id}}">{{$sentenca->descr}}</option>
                                    @empty
                                        <span>Nenhuma sentença cadastrada</span>
                                    @endforelse
                                    </select>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">+</div>
                                        </div>
                                        <input name="recipientvalor" placeholder="0" type="text" class="form-control" id="recipientvalorp">
                                    </div>
                                    <button type="submit" class="btn mb-2 btn-sm btn-warning">Atribuir</button> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal SENTENÇA NEGATIVA -->
            <div class="modal fade" id="sentencanegativa" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Atribuir sentença negativa</h5>
                            
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body"><span class="badge badge-danger">- XP</span>
                            <form action="{{url('/atribsentenca')}}" method="post">
                            {!! csrf_field() !!}
                            {!! Form::hidden('tab_id',          'painel-alunos'     )!!}
                            {!! Form::hidden('participa_id',    $aluno->id          )!!}
                            {!! Form::hidden('tipo',            'negativa'          )!!}
                                <div class="form-group">
                                    <label for="">Selecionar sentença</label>
                                    <select id="valorsentencan" class="form-control">
                                        <option value="">--  Selecione  --</option>
                                    @forelse($n_sentencas as $sentenca)
                                        <option value="{{$sentenca->id}}">{{$sentenca->descr}}</option>
                                    @empty
                                        <span>Nenhuma sentença cadastrada</span>
                                    @endforelse
                                    </select>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">-</div>
                                        </div>
                                        <input name="recipientvalor" placeholder="0" type="text" class="form-control" id="recipientvalorn">
                                    </div>
                                    <button type="submit" class="btn mb-2 btn-sm btn-danger">Atribuir</button> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <h1>Nenhum aluno cadastrado</h1>
            @endforelse
        </tbody>
    </table>
    <!-- SENTENÇA POSITIVA -->
    <script type="text/javascript">
        var recipientvalor 
        $('#valorsentencap').change(function(event){
            recipientvalor = $(this).val(); // or -> event.currentTarget.value;
            $.get('/getsentenca/' + recipientvalor, function (valor) {
                var valorsent = parseInt(valor);
                $('#recipientvalorp').val(valorsent);
            });
        });
    </script>
    <!-- SENTENÇA NEGATIVA -->
    <script type="text/javascript">
        var recipientvalor 
        $('#valorsentencan').change(function(event){
            recipientvalor = $(this).val(); // or -> event.currentTarget.value;
            $.get('/getsentenca/' + recipientvalor, function (valor) {
                var valorsent = parseInt(valor);
                $('#recipientvalorn').val(valorsent);
            });
        });
    </script>


</div>