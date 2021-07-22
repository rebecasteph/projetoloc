
<div class="col-md-2 pill-resp menu-lateral"><!-- background-color: #cbbde2; -->
  <div class="nav nav-pills flex-md-column nav-md-fill mb-3 mt-3" id="pills-tab" role="tablist" >
    @can('menu_aluno')
      <a class="nav-link active" id="heroiAluno-tab" data-toggle="pill" href="#heroi" role="tab" aria-controls="heroi" aria-selected="true">Herói</a>
      <a class="nav-link"   id="tela-jogadores-tab"       data-toggle="pill" href="#tela-jogadores" role="tab" aria-controls="jogadores" aria-selected="false">Jogadores</a>
      <a class="nav-link"   id="equipamentos-tab"    data-toggle="pill" href="#equipamentos" role="tab" aria-controls="equipamentos" aria-selected="false">Equipamentos</a>
      <a class="nav-link"   id="missao-tab"          data-toggle="pill" href="#missao" role="tab" aria-controls="missao" aria-selected="false">Missão</a>
      <a class="nav-link"   id="chat-tab"            data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false">Chat</a>
    @endcan
    @can('menu_professor')
      <a class="nav-link active"   id="tela-jogadores-tab"     data-toggle="pill" href="#tela-jogadores" role="tab" aria-controls="jogadores" aria-selected="true">Jogadores</a>
      <a class="nav-link"   id="missao-tab"          data-toggle="pill" href="#missao" role="tab" aria-controls="missao" aria-selected="false">Missão</a>
      <a class="nav-link"   id="relatorio-tab"       data-toggle="pill" href="#relatorio" role="tab" aria-controls="relatorio" aria-selected="false">Relatórios</a>
      <a class="nav-link"   id="chat-tab"            data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false">Chat</a>
    @endcan
  </div>
</div>
<div class="col-md-10 p-0 ml-auto">
  <div class="tab-content" id="pills-tabContent">
  @can('menu_professor')
    <div class="tab-pane-tela tab-pane fade show active" id="tela-jogadores" role="tabpanel" aria-labelledby="tela-jogagores-tab">
      @include('menu.jogadores')
    </div>
  @endcan
  @can('menu_aluno')
    <div class="tab-pane-tela tab-pane fade show active" id="heroi" role="tabpanel" aria-labelledby="heroiAluno-tab">
      <div class="nav nav-sec text-md-center"><p>{{$participa->turma->nome}}</p></div>@include('menu.heroiAluno')
    </div>
    <div class="tab-pane-tela tab-pane fade" id="tela-jogadores" role="tabpanel" aria-labelledby="jogadoresAluno-tab">@include('menu.jogadores')</div>
    <div class="tab-pane-tela tab-pane fade" id="equipamentos" role="tabpanel" aria-labelledby="equipamentosAluno-tab">
      <div class="nav nav-sec text-md-center"><p>Loja de Equipamentos</p></div>@include('telaAluno.equipamentos.equipamentosAluno')
    </div>
    <!-- <div class="tab-pane-tela tab-pane fade" id="fase-do-chefao" role="tabpanel" aria-labelledby="chefaoAluno-tab">
      <div class="nav nav-sec text-md-center"><p>{{$participa->turma->nome}}</p></div>@include('telaAluno.chefao.chefaoAluno')
    </div>
    <div class="tab-pane-tela tab-pane fade" id="missao" role="tabpanel" aria-labelledby="missaoAluno-tab">
      <div class="nav nav-sec text-md-center">
      <p>{{$participa->turma->nome}}</p></div>@include('menu.missao.listaMissao')
    </div>
    <div class="tab-pane-tela tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chatAluno-tab">
      <div class="nav nav-sec text-md-center"><p>Contatos Recentes</p></div>@include('chat')
    </div> -->
  @endcan 
  </div>
</div>
