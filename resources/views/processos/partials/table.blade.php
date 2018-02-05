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
        <th>Número judicial</th>
        <th>Número ALERJ</th>
        <th>Tribunal</th>
        <th class="hidden-xs">Distribuído em</th>
        <th>Ação</th>
        <th class="hidden-xs">Autor</th>
        <th class="hidden-xs">Objeto</th>
        <th class="hidden-xs">Procurador</th>
        <th class="hidden-xs">Assessor</th>
        <th class="hidden-xs">Estagiário</th>
    </tr>
    </thead>

    @forelse ($processos as $processo)
        <tr>
            <td>
                <a href="{{ route('processos.show', ['id' => $processo->id]) }}">{{ $processo->numero_judicial }}</a>
            </td>
            <td>{{ $processo->numero_alerj }}</td>
            <td>{{ $processo->tribunal->nome }}</td>
            <td class="hidden-xs">{{ $processo->data_distribuicao }}</td>
            <td>{{ $processo->acao->nome }}</td>
            <td class="hidden-xs">{{ $processo->autor }}</td>
            <td class="hidden-xs">{{ $processo->objeto }}</td>
            <td class="hidden-xs">{{ is_null($processo->procurador) ? 'N/C' : $processo->procurador->name }}</td>
            <td class="hidden-xs">{{ is_null($processo->assessor) ? 'N/C' : $processo->assessor->name }}</td>
            <td class="hidden-xs">{{ is_null($processo->estagiario) ? 'N/C' : $processo->estagiario->name }}</td>
        </tr>
    @empty
        <p>Nenhum processo encontrado</p>
    @endforelse
</table>
