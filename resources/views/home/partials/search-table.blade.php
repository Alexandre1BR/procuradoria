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
        <th></th>
        <th>Número Judicial</th>
        <th>Número ALERJ</th>
        <th>Tribunal</th>
        <th>Vara</th>
        <th>Data Distribuição</th>
        <th>Ação</th>
        <th>Relator</th>
        <th>Apensos</th>
        <th>Juiz</th>
        <th>Tipo Juiz</th>
        <th>Autor</th>
        <th>Reu</th>
        <th>Objeto</th>
        <th>Merito</th>
        <th>Liminar</th>
        <th>Recurso</th>
        <th>Procurador</th>
        <th>Estagiário</th>
        <th>Assessor</th>
        <th>Meio</th>
    </tr>
    </thead>

    @forelse ($processos as $processo)
        <tr>
            <td><a href="{{ action('Processos@detail', 'id=').$processo['id']}}">Detalhe Processo</a></td>
            <td>{{ $processo->numero_alerj }}</td>
            <td>{{ is_null($processo->tribunal) ? : $processo->tribunal->nome }}</td>
            <td>{{ $processo->vara }}</td>
            <td>{{ $processo->data_distribuicao }}</td>
            <td>{{ is_null($processo->acao) ? : $processo->acao->nome }}</td>
            <td>{{ is_null($processo->relator) ? : $processo->relator->nome }}</td>
            <td>{{ $processo->apensos_obs }}</td>
            <td>{{ is_null($processo->juiz) ? : $processo->juiz->nome }}</td>
            <td>{{ is_null($processo->juiz) ? : $processo->juiz->tipoJuiz->nome }}</td>
            <td>{{ $processo->autor }}</td>
            <td>{{ $processo->reu }}</td>
            <td>{{ $processo->objeto }}</td>
            <td>{{ $processo->merito }}</td>
            <td>{{ $processo->liminar }}</td>
            <td>{{ $processo->recurso }}</td>
            <td>{{ is_null($processo->procurador) ? : $processo->procurador->name }}</td>
            <td>{{ is_null($processo->estagiario) ? : $processo->estagiario->name }}</td>
            <td>{{ is_null($processo->assessor) ? : $processo->assessor->name }}</td>
            <td>{{ is_null($processo->tipoMeio) ? : $processo->tipoMeio->name }}</td>
            <td>{{ $processo->tipoMeio->nome }}</td>
        </tr>
    @empty
        <p>Nenhum processo encontrado</p>
    @endforelse
</table>
