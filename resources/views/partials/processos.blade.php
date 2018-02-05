<div class="panel panel-default">

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <table id="example" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                    <thead>

                    <tr>
                        <th>Número judicial</th>
                        <th>Número ALERJ</th>
                        <th>Tribunal</th>
                        <th class=".hidden-xs">Distribuído em</th>
                        <th>Ação</th>
                        <th class=".hidden-xs">Autor</th>
                        <th class=".hidden-xs">Objeto</th>
                        <th class=".hidden-xs">Procurador</th>
                        <th class=".hidden-xs">Assessor</th>
                        <th class=".hidden-xs">Estagiário</th>
                    </tr>
                    </thead>

                    @if(isset($processos))
                        @forelse ($processos as $processo)
                            <tr>
                                <td>
                                    <a href="{{ route('processos.show', ['id' => $processo->id]) }}">{{ $processo->numero_judicial }}</a>
                                </td>
                                <td>{{ $processo->numero_alerj }}</td>
                                <td>{{ $processo->tribunal->nome }}</td>
                                <td class=".hidden-xs">{{ $processo->data_distribuicao }}</td>
                                <td>{{ $processo->acao->nome }}</td>
                                <td class=".hidden-xs">{{ $processo->autor }}</td>
                                <td class=".hidden-xs">{{ $processo->objeto }}</td>
                                <td class=".hidden-xs">{{ is_null($processo->procurador) ? : $processo->procurador->name }}</td>
                                <td class=".hidden-xs">{{ is_null($processo->assessor) ? : $processo->assessor->name }}</td>
                                <td class=".hidden-xs">{{ is_null($processo->estagiario) ? : $processo->estagiario->name }}</td>
                            </tr>
                        @empty
                            <p>Nenhum processo encontrado</p>
                        @endforelse
                        @else
                            <p>Nenhum processo encontrado</p>
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
