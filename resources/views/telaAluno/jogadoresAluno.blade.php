

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

<div class="tab-content" id="pills-tabContent">

  <!-- JOGADORES -->
  <div class="tab-pane fade" id="jogadores-heroi" role="tabpanel" aria-labelledby="jogadores-tab">
    jogadores
  </div>

  <!-- EQUIPES -->
  <div class="tab-pane fade p-4 show active" id="equipe" role="tabpanel" aria-labelledby="equipe-tab">
    <div class="tabela-equipe">
      <div class=" mb-1">
        <img class="escudo-elo-md d-inline" src="{!!asset('img/elos/elo_Epico.png')!!}" alt="elo">
        <h3 class="d-inline ">Nome do Time 1</h3>
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
        <h3 class="d-inline ">Nome do Time 2</h3>
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
  <div class="tab-pane fade" id="turma" role="tabpanel" aria-labelledby="turma-tab">
    <h3>turma</h3>
  </div>

</div>

