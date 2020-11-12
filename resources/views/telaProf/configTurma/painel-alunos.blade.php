<div class="pt-4">
    <table class="table table-sm">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">XP</th>
        <th scope="col">Equipe</th>
        </tr>
    </thead>
    <tbody>
        @forelse($alunos as $aluno)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$aluno->aluno->nome}}</td>
            <td>{{$aluno->xp_aluno}}</td>
            <td>$equipe</td>
        </tr>
        @empty
        <h1>Nenhum aluno cadastrado</h1>
        @endforelse
    </tbody>
    </table>
</div>