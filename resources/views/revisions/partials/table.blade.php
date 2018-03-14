<table id="revisionTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>#</th>
            <th>Usuário</th>
            <th>Tabela</th>
            <th>Antigo valor</th>
            <th>Novo valor</th>
        </tr>
    </thead>

    @forelse ($revisions as $revision)
        <tr>
            <td>
                @if ($revision->link)
                    <a href="{{ $revision->link }}">
                @endif

                {{ $revision->id }}

                @if ($revision->link)
                    </a>
                @endif
            </td>

            <td>{{ is_null($revision->user) ? '' : $revision->user->name }}</td>

            <td>{{ $revision->revisionable }}</td>

            <td>{{ $revision->old_value }}</td>

            <td>{{ $revision->new_value }}</td>
        </tr>
    @empty
        <p>Nenhuma revisão encontrada</p>
    @endforelse

    {{ $revisions->links() }}
</table>
