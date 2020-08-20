
<div class="col-md-2 pill-resp" style="background-color: #f2f2f2;"><!-- background-color: #cbbde2; -->
  <div class="nav nav-pills flex-md-column nav-md-fill mb-3 mt-3" id="pills-tab" role="tablist" >
    <a class="nav-link active" id="heroiAluno-tab"    data-toggle="pill" href="#heroi" role="tab" aria-controls="heroiAluno" aria-selected="true">Herói</a>
    <a class="nav-link"   id="jogadoresAluno-tab"     data-toggle="pill" href="#jogadores" role="tab" aria-controls="jogadoresAluno" aria-selected="false">Jogadores</a>
    <a class="nav-link" id="equipamentosAluno-tab"    data-toggle="pill" href="#equipamentos" role="tab" aria-controls="equipamentosAluno" aria-selected="false">Equipamentos</a>
    <a class="nav-link" id="chefaoAluno-tab"          data-toggle="pill" href="#fase-do-chefao" role="tab" aria-controls="chefaoAluno" aria-selected="false">Fase do Chefão</a>
    <a class="nav-link" id="missaoAluno-tab"          data-toggle="pill" href="#missao" role="tab" aria-controls="missaoAluno" aria-selected="false">Missão</a>
    <a class="nav-link" id="chatAluno-tab"            data-toggle="pill" href="#chat" role="tab" aria-controls="chatAluno" aria-selected="false">Chat</a>
  </div>
</div>
<div class="col-md-10 p-0 foo">
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="heroi" role="tabpanel" aria-labelledby="heroiAluno-tab">@include('telaAluno.heroiAluno')</div>
    <div class="tab-pane fade" id="jogadores" role="tabpanel" aria-labelledby="jogadoresAluno-tab">@include('telaAluno.jogadoresAluno')</div>
    <div class="tab-pane fade" id="equipamentos" role="tabpanel" aria-labelledby="equipamentosAluno-tab">@include('telaAluno.equipamentosAluno')</div>
    <div class="tab-pane fade" id="fase-do-chefao" role="tabpanel" aria-labelledby="chefaoAluno-tab">@include('telaAluno.chefaoAluno')</div>
    <div class="tab-pane fade" id="missao" role="tabpanel" aria-labelledby="missaoAluno-tab">@include('telaAluno.missaoAluno')</div>
    <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chatAluno-tab">@include('telaAluno.chatAluno')</div>
  </div>
</div>
