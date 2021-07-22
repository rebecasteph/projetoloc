

<div class="d-flex flex-md-row flex-column">

<div class="col-md-4">
    <div class="mt-3 text-center">
        <div class="align-middle mb-1">
            @can('menu_aluno')
                <img class="escudo-elo-sm d-inline" src="{!!asset('img/elos/elo_Epico.png')!!}" alt="elo">
                <h6 class="d-inline ">Nome da Equipe</h6>
                <img class="escudo-elo-sm d-inline" src="{!!asset('img/elos/elo_Epico.png')!!}" alt="elo">
            @endcan
            @can('menu_professor')
                <img class="escudo-elo-sm d-inline" src="{!!asset('img/elos/elo_Epico.png')!!}" alt="elo">
                <h6 class="d-inline ">Nome da Equipe</h6>
                <img class="escudo-elo-sm d-inline" src="{!!asset('img/elos/elo_Epico.png')!!}" alt="elo">
            @endcan
        </div>
        <div class="mb-2">
            @can('menu_aluno')
            <h3 class="mb-1">{{$colega->aluno->nome}}</h3>
            <span class="badge badge-pill badge-success">Nível {{intval($colega->xp_aluno/$colega->turma->up_xp_aluno)}}</span>
            <span class="badge badge-pill badge-warning">Nível X Equipe</span>
            @endcan
            @can('menu_professor')
            <h3 class="mb-1">{{$participante->aluno->nome}}</h3>
            <span class="badge badge-pill badge-success">Nível {{intval($participante->xp_aluno/$participante->turma->up_xp_aluno)}}</span>
            <span class="badge badge-pill badge-warning">Nível X Equipe</span>
            @endcan
        </div>
    </div>
    <div class="ml-3 mt-3 mb-md-3">
        <div class="xp">
            <h3 class="d-inline-flex mr-2">XP </h3>
            @can('menu_aluno')
                <h>{{$colega->xp_aluno % $colega->turma->up_xp_aluno}}/{{$colega->turma->up_xp_aluno}}</h>
            @endcan
            @can('menu_professor')
                <h>{{$participante->xp_aluno % $participante->turma->up_xp_aluno}}/{{$participante->turma->up_xp_aluno}}</h>
            @endcan
            <div class="d-inline-flex progress progress-bar-size mb-2">
                @can('menu_aluno')
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" 
                    style= "width:  {{($colega->xp_aluno%$colega->turma->up_xp_aluno)/$colega->turma->up_xp_aluno*100}}%"
                    aria-valuenow=  "{{$colega->xp_aluno % $colega->turma->up_xp_aluno}}"
                    aria-valuemax=  "{{$colega->turma->up_xp_aluno}}">
                </div>

                @endcan
                @can('menu_professor')
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar"
                    style= "width:  {{($participante->xp_aluno%$participante->turma->up_xp_aluno)/$participante->turma->up_xp_aluno*100}}%"
                    aria-valuenow=  "{{$participante->xp_aluno % $participante->turma->up_xp_aluno}}"
                    aria-valuemax=  "{{$participante->turma->up_xp_aluno}}">
                </div>
                @endcan
            </div>
        </div>
        <div class="pb">
            <h3 class="d-inline-flex mr-2">PB</h3>
            <h3 class="d-inline-flex">
                @can('menu_aluno')      {{$colega->aluno->pb_aluno}} @endcan
                @can('menu_professor')  {{$participante->aluno->pb_aluno}} @endcan
            </h3>
        </div>
    </div>
    <!-- --------------------- -->
    <div class="caixa-atv atv mt-md-5 mb-2"style="border-top: 1px solid #dee2e6;">
        <div class="linha-atv">
            <i class="fa fa-check-square"></i>
            <span>Atividade submetida 1</span>
        </div>
        <div class="linha-atv">
            <i class="fa fa-exclamation-triangle"></i>
            <span>Sentença negativa atribuída </span>
        </div>
        <div class="linha-atv">
            <i class="fa fa-check-square"></i>
            <span>Sentença positiva atribuída</span>
        </div>
        <div class="linha-atv">
            <i class="fa fa-check-square"></i>
            <span>Sentença positiva atribuída</span>
        </div>
        <div class="linha-atv">
            <i class="fa fa-check-square"></i>
            <span>Sentença positiva atribuída</span>
        </div>
        <div class="linha-atv">
            <i class="fa fa-check-square"></i>
            <span>Sentença positiva atribuída</span>
        </div>
    </div>
</div>
<div class="col-12 col-md-8">
    <div class="area-heroi">
    @can('menu_aluno')
        @switch($colega->heroi_id)
            @case('heroi-1')
                <img class="canva-heroi img-fluid" src="{{asset('img/heroi/heroi-1/heroi-1-00.png')}}" alt="heroi">
                @break
            @case('heroi-2')
                <img class="canva-heroi img-fluid" src="{{asset('img/heroi/heroi-2/heroi-2-00.png')}}" alt="heroi">
                @break
            @case('heroi-3')
                <img class="canva-heroi img-fluid" src="{{asset('img/heroi/heroi-3/heroi-3-00.png')}}" alt="heroi">
                @break
        @endswitch
    @endcan
    @can('menu_professor')
        @switch($participante->heroi_id)
            @case('heroi-1')
                <img class="canva-heroi img-fluid" src="{{asset('img/heroi/heroi-1/heroi-1-00.png')}}" alt="heroi">
                @break
            @case('heroi-2')
                <img class="canva-heroi img-fluid" src="{{asset('img/heroi/heroi-2/heroi-2-00.png')}}" alt="heroi">
                @break
            @case('heroi-3')
                <img class="canva-heroi img-fluid" src="{{asset('img/heroi/heroi-3/heroi-3-00.png')}}" alt="heroi">
                @break
        @endswitch
    @endcan
    </div>        
</div>
</div>
