<div class="col-md-4" style="position: absolute; right: 16px;">
    <article class="mt-4 message is-info">
        <div class="message-body p-2">
        Os Elos de equipe também estão disponíveis para seus alunos.
        </div>
    </article>
</div>

<div class="timeline">
    <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Guerreiro</h3>
            <p>O início de uma jornada. Novos guerreiros sempre estão prontos para evoluir suas habilidades!</p>
            <p><strong>Pontuação mínima: </strong>0 XP</p>
        </div>
        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="{{asset('img/elos/elo_Guerreiro.png')}}" class="img-fluid" alt="img">
        </div>
        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date"></div>
    </div>

    <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Elite</h3>
            <p>Tornar-se um grupo de elite requer muito treinamento e força de vontade. Verdadeiros guerreiros nunca se cansam!</p>
            <p><strong>Pontuação mínima: </strong>{{$meta_elite}} XP</p>
        </div>
        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="{{asset('img/elos/elo_Elite.png')}}" class="img-fluid" alt="img">
        </div>
        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date"></div>
    </div>

    <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Mestre</h3>
            <p>Acreditamos que o esforço e o trabalho em equipe sempre vale a pena. Sim, somos mestres no que fazemos!</p>
            <p><strong>Pontuação mínima: </strong>{{$meta_mestre}} XP</p>
        </div>
        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="{{asset('img/elos/elo_Mestre.png')}}" class="img-fluid" alt="img">
        </div>
        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date"></div>
    </div>

    <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Épico</h3>
            <p>Entre os mestres, destacam-se os melhores. Avante! Um novo horizonte nos espera!</p>
            <p><strong>Pontuação mínima: </strong>{{$meta_epico}} XP</p>
        </div>
        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="{{asset('img/elos/elo_Epico.png')}}" class="img-fluid" alt="img">
        </div>
        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date"></div>
    </div>

    <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Lendário</h3>
            <p>Nossas habilidades são aprimoradas. Nossos guerreiros os melhores. Nosso triunfo será mais que lendário! </p>
            <p><strong>Pontuação mínima: </strong>{{$meta_lendario}} XP</p>
        </div>
        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="{{asset('img/elos/elo_Lenda.png')}}" class="img-fluid" alt="img">
        </div>
        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date"></div>
    </div>

    <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Mítico</h3>
            <p>A glória mítica chega somente para os que realmente a merecem. Somos aqueles que ocupam o topo dos clãs!</p>
            <p><strong>Pontuação mínima: </strong>{{$meta_mitico}} XP</p>
        </div>
        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="{{asset('img/elos/elo_Mitico.png')}}" class="img-fluid" alt="img">
        </div>
        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date"></div>
    </div>
</div>
