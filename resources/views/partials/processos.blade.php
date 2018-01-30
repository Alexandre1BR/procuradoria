<div class="panel panel-default">

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>

                    <tr>
                        <th>Número Judicial</th>
                        <th>Número ALERJ</th>
                        <th>Tribunal</th>
                        <th>Distribuído em</th>
                        <th>Ação</th>
                        <th>Autor</th>
                        <th>Objeto</th>
                        <th>Procurador</th>
                        <th>Assessor</th>
                        <th>Estagiário</th>
                    </tr>
                    </thead>

                    @forelse ($processos as $processo)
                        <tr>
                            <td>
                                <a href="{{ route('processos.show', ['id' => $processo->id]) }}">{{ $processo->numero_judicial }}</a>
                            </td>
                            <td>{{ $processo->numero_alerj }}</td>
                            <td>{{ $processo->tribunal->nome }}</td>
                            <td>{{ $processo->data_distribuicao }}</td>
                            <td>{{ $processo->acao->nome }}</td>
                            <td>{{ $processo->autor }}</td>
                            <td>{{ $processo->objeto }}</td>
                            <td>{{ is_null($processo->procurador) ? : $processo->procurador->name }}</td>
                            <td>{{ is_null($processo->assessor) ? : $processo->assessor->name }}</td>
                            <td>{{ is_null($processo->estagiario) ? : $processo->estagiario->name }}</td>
                        </tr>
                    @empty
                        <p>Nenhum processo encontrado</p>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>
