<nav class="roxo navbar navbar-expand-lg navbar-dark fixed-top" >
    <a class="navbar-brand pt-2" href="\">
        <img src="/img/loc-titulo.png" class="tam-brand d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse my-1 justify-content-between" id="navbarNav">
        @can('menu_aluno')<h5 class="m-0 navbar-text">Área do Aluno</h5>@endcan
        @can('menu_professor')<h5 class="m-0 navbar-text">Área do Professor</h5>@endcan
        <ul class="navbar-nav">
        @can('menu_aluno')
            <li class="nav-item active">
                <a class="nav-link" href="{{url("/minhas-turmas")}}">Turmas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url("/meu-perfil")}}">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url("/aluno/logout")}}">Sair</a>
            </li>
        @endcan
        @can('menu_professor')
            <!-- <li class="nav-item">
                <a class="nav-link disabled" href="">Notificação</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="">Materiais</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="{{url("/gerenciar-turmas")}}">Turmas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url("/professor/meu-perfil")}}">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url("/professor/logout")}}">Sair</a>
            </li>
        @endcan
        </ul>
    </div>
</nav>