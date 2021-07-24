<script>
  $(function () {
    $('#tela-jogadores-tab ').click(function(event) {
        $('#jogadores-heroi .tela-dir .tab-content .tab-pane').tab('show');
    }); 
  })
</script>

<ul class="nav-sec justify-content-center nav nav-pills" id="pills-tab" role="tablist">
  <li class="nav-item active">
    <a class="nav-link " id="jogadores-tab" data-toggle="pill" href="#jogadores-heroi" role="tab" aria-controls="jogadores" aria-selected="true">Jogadores</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link" id="equipes-tab" data-toggle="pill" href="#equipes" role="tab" aria-controls="equipes" aria-selected="false">Equipe</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="turma-tab" data-toggle="pill" href="#turma" role="tab" aria-controls="turma" aria-selected="false">Turma</a>
  </li>
</ul>

<div class="tab-content container-fluid p-0" id="pills-tabContent">

  <!-- JOGADORES -->
  <div class="tab-pane fade active show" id="jogadores-heroi" role="tabpanel" aria-labelledby="jogadores-tab">
    <div class="container-fluid">
      <div class="row inbox_msg">

        <div class="inbox_people">
          
          <div class="inbox_chat nav nav-tab" id=""role="tablist">
            @can('menu_aluno')
              @forelse($colegas as $colega)
              <div class="nav-link chat_list" data-toggle="tab" href="#heroi-{{$loop->iteration}}">
                <div class="chat_people">
                  <div class="chat_img chat_img-1">
                    <img class="escudo-elo-sm mb-2" src="{!!asset('img/elos/elo_Epico.png')!!}" alt="elo">
                  </div>
                  <div class="chat_ib">
                    <h5>{{$colega->aluno->nome}}<span class="chat_img-1 badge badge-pill badge-success">{{intval($colega->xp_aluno/$colega->turma->up_xp_aluno)}}</span></h5>
                    <img class="chat_img-2" style="height: 19.3px; width: 19.3px; margin-left: 43%;" src="{!!asset('img/elos/elo_Epico.png')!!}" alt="elo">
                    <span class="chat_img-2 badge badge-pill badge-success">2</span>
                  </div>
                </div>
              </div>
              @empty
                <h1>Nenhum aluno cadastrado</h1>
              @endforelse
            @endcan          
            @can('menu_professor')
              @forelse($alunos as $participante)
              <div class="nav-link chat_list" data-toggle="tab" href="#heroi-{{$loop->iteration}}">
                <div class="chat_people">
                  <div class="chat_img chat_img-1">
                    <img class="escudo-elo-sm mb-2" src="{!!asset('img/elos/elo_Epico.png')!!}" alt="elo">
                  </div>
                  <div class="chat_ib">
                    <h5>{{$participante->aluno->nome}}<span class="chat_img-1 badge badge-pill badge-success">{{intval($participante->xp_aluno/$participante->turma->up_xp_aluno)}}</span></h5>
                    <img class="chat_img-2" style="height: 19.3px; width: 19.3px; margin-left: 43%;" src="{!!asset('img/elos/elo_Epico.png')!!}" alt="elo">
                    <span class="chat_img-2 badge badge-pill badge-success">2</span>
                  </div>
                </div>
              </div>
              @empty
                <h1>Nenhum aluno cadastrado</h1>
              @endforelse
            @endcan
          </div>

        </div>  
        
        <div class="tela-dir">
          <div class="tab-content" id="pills-tabContent-alunos">
            @can('menu_aluno')
              @forelse($colegas as $colega)
              <div class="tab-pane fade" id="heroi-{{$loop->iteration}}">
                @include('menu.heroiJogadores')
              </div>
              @empty
                <h1>Nenhum aluno cadastrado</h1>
              @endforelse
            @endcan
            @can('menu_professor')
              <script>
                $(function () {
                  $(document).ready(function(){
                      $('#jogadores-heroi .tela-dir .tab-content #heroi-1').tab('show');
                  }); 
                })
              </script>
              @forelse($alunos as $participante)
              <div class="tab-pane fade" id="heroi-{{$loop->iteration}}">
                @include('menu.heroiJogadores')
              </div>
              @empty
                <h1>Nenhum aluno cadastrado</h1>
              @endforelse
            @endcan
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- EQUIPES -->
  <div class="tab-pane p-4 fade" id="equipes" role="tabpanel" aria-labelledby="equipes-tab">
    <div class="tabela-equipe">
      <div class=" mb-1">
        <img class="escudo-elo-md d-inline" src="{!!asset('img/elos/elo_Epico.png')!!}" alt="elo">
        <h3 class="d-inline ">Equipe 1 (fictícia)</h3>
      </div>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col" class="nivel">Nível</th>
            <th scope="col" class="xp">XP</th>
            <th scope="col" class="pb">PB</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Mark</td>
            <td class="nivel">3</td>
            <td class="xp">
              <div class="d-inline-flex progress progress-bar-size mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td class="pb">88</td>
          </tr>
          <tr><td>Jacob</td>
            <td class="nivel">2</td>
            <td class="xp">
              <div class="d-inline-flex progress progress-bar-size mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td class="pb">55</td>
          </tr>
          <tr><td>Roberta</td>
            <td class="nivel">5</td>
            <td class="xp">
              <div class="d-inline-flex progress progress-bar-size mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td class="pb">65</td>
          </tr>
        </tbody>
      </table>

      <br/>
      <br/> 
    </div>

    <div class="tabela-equipe">
      <div class=" mb-1">
        <img class="escudo-elo-md d-inline" src="{!!asset('img/elos/elo_Guerreiro.png')!!}" alt="elo">
        <h3 class="d-inline ">Equipe 2 (fictícia)</h3>
      </div>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col" class="nivel">Nível</th>
            <th scope="col" class="xp">XP</th>
            <th scope="col" class="pb">PB</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Mark</td>
            <td class="nivel">3</td>
            <td class="xp">
              <div class="d-inline-flex progress progress-bar-size mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td class="pb">88</td>
          </tr>
          <tr><td>Jacob</td>
            <td class="nivel">2</td>
            <td class="xp">
              <div class="d-inline-flex progress progress-bar-size mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td class="pb">55</td>
          </tr>
          <tr><td>Roberta</td>
            <td class="nivel">5</td>
            <td class="xp">
              <div class="d-inline-flex progress progress-bar-size mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td class="pb">65</td>
          </tr>
        </tbody>
      </table>
      
      <br/> 
      <br/> 
    </div>

  </div>

  <!-- TURMA -->
  <div class="tab-pane p-4 fade" id="turma" role="tabpanel" aria-labelledby="turma-tab">
    @can('menu_aluno')
    <h3>Ranking {{$participa->turma->nome}}</h3>
    @endcan
    @can('menu_professor')
    <h3>Ranking {{$turma->nome}}</h3>
    @endcan
    <br>
    <table class="table table-sm table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col" class="elo-equipe-turma">Equipe</th>
          <th scope="col" class="nivel">Nível</th>            
          <th scope="col" class="xp">XP</th>
          <th scope="col" class="pb">PB</th>
        </tr>
      </thead>
      <tbody>
      @can('menu_aluno')
        @forelse($colegas as $colega)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$colega->aluno->nome}}</td>
          <th class="elo-equipe-turma"><img class="escudo-elo-sm " src="{!!asset('img/elos/elo_Mitico.png')!!}" alt="elo"></th>
          <td class="nivel">{{intval($colega->xp_aluno/$colega->turma->up_xp_aluno)}}</td>
          <td class="xp">
            <div class="d-inline-flex progress progress-bar-size mb-2">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </td>
          <td class="pb">88</td>
        </tr>
        @empty
        <h1>Nenhum aluno cadastrado</h1>
        @endforelse
      @endcan
      @can('menu_professor')
        @forelse($alunos as $participante)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$participante->aluno->nome}}</td>
          <td class="elo-equipe-turma"><img class="escudo-elo-sm " src="{!!asset('img/elos/elo_Mitico.png')!!}" alt="elo"></th>
          <td class="nivel">{{intval($participante->xp_aluno/$turma->up_xp_aluno)}}</td>
          <td class="xp">
            <div class="d-inline-flex progress progress-bar-size mb-2">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </td>
          <td class="pb">88</td>

        </tr>
        @empty
        <h1>Nenhum aluno cadastrado</h1>
        @endforelse
      @endcan
      </tbody>
    </table>

  </div>

</div>



