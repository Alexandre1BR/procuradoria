@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

@if(session()->has('warning'))
    <div class="alert alert-warning">
        {{ session()->get('warning') }}
    </div>
@endif

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Abreviação</th>
    </tr>
    </thead>

    @forelse ($acoes as $acao)
        <tr>
            <td>
                <a href="{{ route('acoes.show', ['id' => $acao->id]) }}">{{ $acao->nome }}</a>
            </td>
            <td>{{ $acao->abreviacao }}</td>
        </tr>
    @empty
        <p>Nenhuma ação encontrada</p>
    @endforelse
</table>
