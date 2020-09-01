

<ul class="nav-sec justify-content-center nav nav-pills" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link " id="jogadores-tab" data-toggle="pill" href="#jogadores-heroi" role="tab" aria-controls="jogadores" aria-selected="false">Jogadores</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" id="equipe-tab" data-toggle="pill" href="#equipe" role="tab" aria-controls="equipe" aria-selected="true">Equipe</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="turma-tab" data-toggle="pill" href="#turma" role="tab" aria-controls="turma" aria-selected="false">Turma</a>
  </li>
</ul>

<div class="tab-content container-fluid p-0" id="pills-tabContent">

  <!-- JOGADORES -->
  <div class="tab-pane fade" id="jogadores-heroi" role="tabpanel" aria-labelledby="jogadores-tab">
  <div class="container-fluid">
    <div class="row">

    
  
      <div class="col-md-2 pill-resp lista-lateral-alunos border-left p-0"><!-- background-color: #cbbde2; -->
        <div class="nav nav-pills flex-md-column nav-md-fill mb-3 mt-3" id="pills-tab-alunos" role="tablist" >
          <a class="nav-link active" id="heroiAluno-tab-1"    data-toggle="pill" href="#heroi-1" role="tab" aria-controls="heroiAluno-1" aria-selected="true">Aluno 1</a>
          <a class="nav-link"   id="heroiAluno-tab-2"     data-toggle="pill" href="#heroi-2" role="tab" aria-controls="heroiAluno-2" aria-selected="false">Aluno 2</a>
          <a class="nav-link" id="heroiAluno-tab-3"    data-toggle="pill" href="#heroi-3" role="tab" aria-controls="heroiAluno-3" aria-selected="false">Aluno 3</a>
          <a class="nav-link" id="heroiAluno-tab-4"    data-toggle="pill" href="#heroi-4" role="tab" aria-controls="heroiAluno-4" aria-selected="false">Aluno 4</a>
          <a class="nav-link"   id="heroiAluno-tab-5"     data-toggle="pill" href="#heroi-5" role="tab" aria-controls="heroiAluno-5" aria-selected="false">Aluno 5</a>
          <a class="nav-link" id="heroiAluno-tab-6"    data-toggle="pill" href="#heroi-6" role="tab" aria-controls="heroiAluno-6" aria-selected="false">Aluno 6</a>
        </div>
      </div>
      <div class="col-md-10 p-0">
        <div class="tab-content" id="pills-tabContent-alunos">
          <div class="tab-pane fade show active" id="heroi-1" role="tabpanel" aria-labelledby="heroiAluno-tab-1">1 @include('telaAluno.heroiAluno')</div>
          <div class="tab-pane fade" id="heroi-2" role="tabpanel" aria-labelledby="heroiAluno-tab-2">2 @include('telaAluno.heroiAluno')</div>
          <div class="tab-pane fade" id="heroi-3" role="tabpanel" aria-labelledby="heroiAluno-tab-3">3 @include('telaAluno.heroiAluno')</div>
          <div class="tab-pane fade" id="heroi-4" role="tabpanel" aria-labelledby="heroiAluno-tab-4">4 @include('telaAluno.heroiAluno')</div>
          <div class="tab-pane fade" id="heroi-5" role="tabpanel" aria-labelledby="heroiAluno-tab-5">5 @include('telaAluno.heroiAluno')</div>
          <div class="tab-pane fade" id="heroi-6" role="tabpanel" aria-labelledby="heroiAluno-tab-6">6 @include('telaAluno.heroiAluno')</div>
        </div>
      </div>
    </div>
  </div>

  <script>$('#pills-tab-alunos').tabdrop()</script>
    


  </div>

  <!-- EQUIPES -->
  <div class="tab-pane p-4 fade show active" id="equipe" role="tabpanel" aria-labelledby="equipe-tab">
    <div class="tabela-equipe">
      <div class=" mb-1">
        <img class="escudo-elo-md d-inline" src="{!!asset('img/elos/elo_Epico.png')!!}" alt="elo">
        <h3 class="d-inline ">Nome da Equipe 1</h3>
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
        <h3 class="d-inline ">Nome da Equipe 2</h3>
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
    <h3>Ranking da Turma 1</h3>
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
          
          <tr>
            <th scope="row">1</th>
            <td>Roberta</td>
            <th class="elo-equipe-turma"><img class="escudo-elo-sm " src="{!!asset('img/elos/elo_Mitico.png')!!}" alt="elo"></th>
            <td class="nivel">6</td>
            <td class="xp">
              <div class="d-inline-flex progress progress-bar-size mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td class="pb">88</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Roberta</td>
            <th class="elo-equipe-turma"><img class="escudo-elo-sm " src="{!!asset('img/elos/elo_Lenda.png')!!}" alt="elo"></th>
            <td class="nivel">6</td>
            <td class="xp">
              <div class="d-inline-flex progress progress-bar-size mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td class="pb">88</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Roberta</td>
            <th class="elo-equipe-turma"><img class="escudo-elo-sm " src="{!!asset('img/elos/elo_Epico.png')!!}" alt="elo"></th>
            <td class="nivel">4</td>
            <td class="xp">
              <div class="d-inline-flex progress progress-bar-size mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td class="pb">55</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Roberta</td>
            <th class="elo-equipe-turma"><img class="escudo-elo-sm " src="{!!asset('img/elos/elo_Mestre.png')!!}" alt="elo"></th>
            <td class="nivel">3</td>
            <td class="xp">
              <div class="d-inline-flex progress progress-bar-size mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td class="pb">65</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Roberta</td>
            <th class="elo-equipe-turma"><img class="escudo-elo-sm " src="{!!asset('img/elos/elo_Elite.png')!!}" alt="elo"></th>
            <td class="nivel">3</td>
            <td class="xp">
              <div class="d-inline-flex progress progress-bar-size mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td class="pb">65</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Roberta</td>
            <th class="elo-equipe-turma"><img class="escudo-elo-sm " src="{!!asset('img/elos/elo_Guerreiro.png')!!}" alt="elo"></th>
            <td class="nivel">3</td>
            <td class="xp">
              <div class="d-inline-flex progress progress-bar-size mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td class="pb">65</td>
          </tr>






        </tbody>
      </table>

  </div>

</div>

