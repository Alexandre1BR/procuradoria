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
            <th>Número Judicial</th>
            <th>Número ALERJ</th>
            <th>Tribunal</th>
            <th>Vara</th>
            <th>Data Distribuição</th>
            <th>Ação</th>
            <th>Relator</th>
            <th>Apensos</th>
            <th>Juiz</th>
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
            <td>{{ $processo->numero_judicial }}</td>
            <td>{{ $processo->numero_alerj }}</td>
            <td>{{ $processo->tribunal_id }}</td>
            <td>{{ $processo->vara }}</td>
            <td>{{ $processo->data_distribuicao }}</td>
            <td>{{ $processo->acao_id }}</td>
            <td>{{ $processo->relator_id }}</td>
            <td>{{ $processo->apensos_obs }}</td>
            <td>{{ $processo->juiz_id }}</td>
            <td>{{ $processo->autor }}</td>
            <td>{{ $processo->reu }}</td>
            <td>{{ $processo->objeto }}</td>
            <td>{{ $processo->merito }}</td>
            <td>{{ $processo->liminar }}</td>
            <td>{{ $processo->recurso }}</td>
            <td>{{ $processo->procurador_id }}</td>
            <td>{{ $processo->estagiario_id }}</td>
            <td>{{ $processo->assessor_id }}</td>
            <td>{{ $processo->tipo_meio }}</td>
        </tr>
    @empty
        <p>Nenhum processo encontrado</p>
    @endforelse
</table>
