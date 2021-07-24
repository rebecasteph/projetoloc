
<div class="d-flex flex-md-row flex-column">

    <div class="col-md-4">
        <div class="mt-3 text-center">
            <div class="align-middle mb-1">
                <img class="escudo-elo-sm d-inline" src="{!!asset('img/elos/elo_Epico.png')!!}" alt="elo">
                <h6 class="d-inline ">Nome da Equipe</h6>
                <img class="escudo-elo-sm d-inline" src="{!!asset('img/elos/elo_Epico.png')!!}" alt="elo">
            </div>
            <div class="mb-2">
                <h3 class="mb-1">{{Auth::user()->nome}}</h3>
                <span class="badge badge-pill badge-success">Nível {{$nivel_aluno}}</span>
                <span class="badge badge-pill badge-warning">Nível {{$nivel_equipe}} Equipe</span>
            </div>
        </div>
        <div class="ml-3 mt-3 mb-md-3">
            <div class="xp">
                <h3 class="d-inline-flex mr-2">XP</h3>
                <div class="d-inline-flex progress progress-bar-size mb-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:{{$percentage}}%" aria-valuenow="{{$percentage}}" aria-valuemax="{{$participa->turma->up_xp_aluno}}">
                        <!-- <span class="text-dark ml-1"><strong>25%</strong></span> -->
                    </div>
                </div>
            </div>
            <div class="pb">
                <h3 class="d-inline-flex mr-2">PB</h3>
                <h3 class="d-inline-flex">{{$participa->pb_aluno}}</h3>
            </div>
        </div>
        <!-- --------------------- -->
        <div class="mb-2">
            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="arm-sup-tab" data-toggle="tab" href="#arm-sup" role="tab" aria-controls="arm-sup" aria-selected="false"><img class="icon-sm" src="{!!asset('img/icons/arm-sup.png')!!}"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="arm-inf-tab" data-toggle="tab" href="#arm-inf" role="tab" aria-controls="arm-inf" aria-selected="false"><img class="icon-sm" src="{!!asset('img/icons/arm-inf.png')!!}"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="arma-tab" data-toggle="tab" href="#arma" role="tab" aria-controls="arma" aria-selected="false"><img class="icon-sm" src="{!!asset('img/icons/arma.png')!!}"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="bota-tab" data-toggle="tab" href="#bota" role="tab" aria-controls="bota" aria-selected="false"><img class="icon-sm" src="{!!asset('img/icons/bota.png')!!}"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="adereco-tab" data-toggle="tab" href="#adereco" role="tab" aria-controls="adereco" aria-selected="false"><img class="icon-sm" src="{!!asset('img/icons/adereco.png')!!}"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="capacete-tab" data-toggle="tab" href="#capacete" role="tab" aria-controls="capacete" aria-selected="true"><img class="icon-sm" src="{!!asset('img/icons/capacete.png')!!}"></a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="aba-equip tab-pane fade show active" id="arm-sup" role="tabpanel" aria-labelledby="arm-sup-tab">@include('telaAluno.equipamentos.painelArmSup')</div>
                <div class="aba-equip tab-pane fade" id="arm-inf" role="tabpanel" aria-labelledby="arm-inf-tab">@include('telaAluno.equipamentos.painelArmInf')</div>
                <div class="aba-equip tab-pane fade" id="arma" role="tabpanel" aria-labelledby="arma-tab">@include('telaAluno.equipamentos.painelArma')</div>
                <div class="aba-equip tab-pane fade" id="bota" role="tabpanel" aria-labelledby="bota-tab">@include('telaAluno.equipamentos.painelBota')</div>
                <div class="aba-equip tab-pane fade" id="adereco" role="tabpanel" aria-labelledby="adereco-tab">@include('telaAluno.equipamentos.painelAdereco')</div>
                <div class="aba-equip tab-pane fade" id="capacete" role="tabpanel" aria-labelledby="capacete-tab">@include('telaAluno.equipamentos.painelCapacete')</div>
            </div>

        </div>
    </div>
    <div class="col-12 col-md-8">
        <div class="area-heroi">
        @switch($participa->heroi_id)
                @case('heroi-1')
                    <img class="canva-heroi img-fluid" src="{{asset('img/heroi/heroi-1/heroi-1-final.png')}}" alt="heroi">
                    @break
                @case('heroi-2')
                    <img class="canva-heroi img-fluid" src="{{asset('img/heroi/heroi-2/heroi-2-final.png')}}" alt="heroi">
                    @break
                @case('heroi-3')
                    <img class="canva-heroi img-fluid" src="{{asset('img/heroi/heroi-3/heroi-3-final.png')}}" alt="heroi">
                    @break
            @endswitch

        </div>
        
    </div>
</div>
