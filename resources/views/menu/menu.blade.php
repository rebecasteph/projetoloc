
<div class="col-md-2 pill-resp menu-lateral"><!-- background-color: #cbbde2; -->
  <div class="nav nav-pills flex-md-column nav-md-fill mb-3 mt-3" id="pills-tab" role="tablist" >
    <a class="nav-link active" id="heroiAluno-tab"    data-toggle="pill" href="#heroi" role="tab" aria-controls="heroiAluno" aria-selected="true">Herói</a>
    <a class="nav-link"   id="jogadoresAluno-tab"     data-toggle="pill" href="#jogadores" role="tab" aria-controls="jogadoresAluno" aria-selected="false">Jogadores</a>
    <a class="nav-link" id="equipamentosAluno-tab"    data-toggle="pill" href="#equipamentos" role="tab" aria-controls="equipamentosAluno" aria-selected="false">Equipamentos</a>
    <a class="nav-link" id="chefaoAluno-tab"          data-toggle="pill" href="#fase-do-chefao" role="tab" aria-controls="chefaoAluno" aria-selected="false">Fase do Chefão</a>
    <a class="nav-link" id="missaoAluno-tab"          data-toggle="pill" href="#missao" role="tab" aria-controls="missaoAluno" aria-selected="false">Missão</a>
    <a class="nav-link" id="chatAluno-tab"            data-toggle="pill" href="#chat" role="tab" aria-controls="chatAluno" aria-selected="false">Chat</a>
  </div>
</div>
<div class="col-md-10 p-0 ml-auto">
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane-tela tab-pane fade show active" id="heroi" role="tabpanel" aria-labelledby="heroiAluno-tab">
      <div class="nav nav-sec text-md-center"><p>Nome Turma</p></div>@include('telaAluno.heroiAluno')</div>
    <div class="tab-pane-tela tab-pane fade" id="jogadores" role="tabpanel" aria-labelledby="jogadoresAluno-tab">@include('telaAluno.jogadoresAluno')</div>
    <div class="tab-pane-tela tab-pane fade" id="equipamentos" role="tabpanel" aria-labelledby="equipamentosAluno-tab">
      <div class="nav nav-sec text-md-center"><p>Loja de Equipamentos</p></div>@include('telaAluno.equipamentos.equipamentosAluno')</div>
    <div class="tab-pane-tela tab-pane fade" id="fase-do-chefao" role="tabpanel" aria-labelledby="chefaoAluno-tab">
      <div class="nav nav-sec text-md-center"><p>Nome Fase blaa</p></div>@include('telaAluno.chefao.chefaoAluno')</div>
    <div class="tab-pane-tela tab-pane fade" id="missao" role="tabpanel" aria-labelledby="missaoAluno-tab">
      <div class="nav nav-sec text-md-center"><p>Nome Missão</p></div>@include('telaAluno.missao.missaoAluno')</div>
    <div class="tab-pane-tela tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chatAluno-tab">
      <div class="nav nav-sec text-md-center"><p>Contatos Recentes</p></div>@include('telaAluno.chatAluno')</div>
  </div>
</div>
<footer>
  <div class="text-center py-3">© 2020 League of Class
  </div>
</footer>
