

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
                <h3 class="mb-1">{{$participa->aluno->nome}}</h3>
                <span class="badge badge-pill badge-success">Nível {{$nivel_aluno}}</span>
                <span class="badge badge-pill badge-warning">Nível {{$nivel_equipe}} Equipe</span>
                @endcan
            </div>
        </div>
        <div class="ml-3 mt-3 mb-md-3">
            <div class="xp">
                <h3 class="d-inline-flex mr-2">XP</h3>
                @can('menu_aluno')
                    <h>{{$atual}}/{{$participa->turma->up_xp_aluno}}</h>
                @endcan
                <div class="d-inline-flex progress progress-bar-size mb-2">
                    @can('menu_aluno')
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar"
                    style="width:{{$percentage}}%" aria-valuenow="{{$percentage}}"
                    aria-valuemax="{{$participa->turma->up_xp_aluno}}"></div>
                    @endcan
                </div>
            </div>
            <div class="pb">
                <h3 class="d-inline-flex mr-2">PB</h3>
                <h3 class="d-inline-flex">
                    @can('menu_aluno')      {{$participa->pb_aluno}} @endcan
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
            @switch($participa->heroi_id)
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
