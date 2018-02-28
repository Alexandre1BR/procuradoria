<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Login</th>
        <th>Tipo Usuário</th>
        <th>Habilitado/Desabilitado</th>
        <th>&nbsp;</th>
    </tr>
    </thead>
    @forelse ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->userType->nome }}</td>
            <td>{{ $user->disabled_at ? "Desabilitado" : "Habilitado" }}</td>
            <td>
                <a href="{{ route('users.alterarStatus',['user_email'=>$user->email]) }}" class="btn btn-primary pull-right">
                    <i class="fa fa-plus"></i>
                    {{ $user->disabled_at ? "Desabilitado" : "Habilitado" }}
                </a>
            </td>
        </tr>
    @empty
        <p>Nenhum Usuário encontrado.</p>
    @endforelse
</table>
