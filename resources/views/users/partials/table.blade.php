<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Login</th>
        <th>Tipo Usuário</th>
        <th>Status</th>
        <th>Notificações</th>
    </tr>
    </thead>
    @forelse ($users as $user)
        <tr>
            <td><a href="{{ route('users.show', ['id' => $user->id]) }}">{{ $user->name }}</a></td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->userType->nome }}</td>
            <td class="text-center">
                @if($user->disabled_at == null)
                    <a href="{{ route('users.disable',['id'=>$user->id]) }}" class="btn btn-danger pull-right">
                        Desabilitar
                    </a>
                @else
                    <a href="{{ route('users.enable',['id'=>$user->id]) }}" class="btn btn-primary pull-right" >
                        Habilitar
                    </a>
                @endif
            </td>
            <td class="text-center">
                @if($user->all_notifications)
                    <a href="{{ route('users.disable',['id'=>$user->id]) }}" class="btn btn-danger pull-right">
                        Recebe notificações
                    </a>
                @else
                    <a href="{{ route('users.enable',['id'=>$user->id]) }}" class="btn btn-primary pull-right" >
                        Não notificar
                    </a>
                @endif
            </td>
        </tr>
    @empty
        <p>Nenhum Usuário encontrado.</p>
    @endforelse
</table>
