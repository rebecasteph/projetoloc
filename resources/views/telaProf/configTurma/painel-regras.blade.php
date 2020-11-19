<div class="col-md-5" style="position: absolute; right: 16px;">
    <article class="mt-4 message is-info">
        <div class="message-body p-2">
        Edite as metas e obetivos de pontuação da turma.
        </div>
    </article>
</div>

<form class="pt-5" method="PATCH" action="{{route('turma.update', $turma->id)}}">
  
  <div class="form-group row">
    <div class="col-sm-2">
      <input type="number" class="form-control" name="up_xp_aluno" placeholder="XP" value="{{$turma->up_xp_aluno}}">
    </div>
    <label class="col-sm-10">Quantidade de XP para subir de nível do Aluno</label>
  </div>

  <div class="form-group row">
    <div class="col-sm-2">
      <input type="number" class="form-control" name="up_xp_equipe" placeholder="XP" value="{{$turma->up_xp_equipe}}">
    </div>
    <label class="col-sm-10">Quantidade de XP para subir de nível da Equipe (Elo de Equipe)</label>
  </div>

  <div class="form-group row">
    <div class="col-sm-2">
      <input type="number" class="form-control" name="plus_xp_reagir" placeholder="XP" value="{{$turma->plus_xp_reagir}}">
    </div>
    <label class="col-sm-10">Quantidade de XP atribuída ao dar/receber reação no perfil de colega</label>
  </div>

  <div class="form-group row">
    <div class="col-sm-2">
      <input type="number" class="form-control" name="plus_pb_up_elo" placeholder="PB" value="{{$turma->plus_pb_up_elo}}">
    </div>
    <label class="col-sm-10 ">Quantidade de Pontos de Batalha atribuída individualmente ao subir de nível da Equipe (Elo de Equipe)</label>
  </div>

  <div class="form-group row">
    <div class="col-sm-2">
      <input type="number" class="form-control" name="plus_xp_compra" placeholder="XP" value="{{$turma->plus_xp_compra}}">
    </div>
    <label class="col-sm-10">Quantidade de XP atribuída ao comprar Equipamento</label>
  </div>

  <hr>
  <div class="d-flex justify-content-center">
      <button class="btn btn-roxo">Salvar</button>
  </div>

</form>