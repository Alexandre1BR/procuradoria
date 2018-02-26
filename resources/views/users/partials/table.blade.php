<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Login</th>
        <th>Tipo Usuário</th>
    </tr>
    </thead>
    @forelse ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->userType->nome }}</td>
        </tr>
    @empty
        <p>Nenhum Usuário encontrado.</p>
    @endforelse
</table>
