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
        <th>Processo</th>
        <th>Tipo de Andamento</th>
        <th>Tipo de Entrada</th>
        <th>Tipo de Prazo</th>
        <th>Data Prazo</th>
        <th>Data de Entrega</th>
        <th>Observação</th>
    </tr>
    </thead>

    @forelse ($andamentos as $andamento)
        <tr>
            <td><a href="{{ action('Andamentos@detail', 'id=').$andamento['id']}}">{{ $andamento->processo->numero_judicial }}</a></td>
            <td>{{ $andamento->tipoAndamento->nome }}</td>
            <td>{{ $andamento->tipoEntrada->nome }}</td>
            <td>{{ $andamento->tipoPrazo->nome }}</td>
            <td>{{ $andamento->data_prazo }}</td>
            <td>{{ $andamento->data_entrega }}</td>
            <td>{{ $andamento->observacoes }}</td>
        </tr>
    @empty
        <p>Nenhum processo encontrado</p>
    @endforelse
</table>
