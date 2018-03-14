<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-3">
                <h4>
                    <a href="{{ route('home.index') }}">Andamentos</a>

                </h4>
            </div>

            <div class="col-md-9">
                <a id="buttonAndamentos" href="{{ route('andamentos.create',['id'=>$processo->id]) }}" class="btn btn-primary pull-right">
                    <i class="fa fa-plus"></i>
                    Novo andamento
                </a>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <table id="andamentosTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>

                        <tr>
                            <th>Tipo de andamento</th>
                            <th>Tipo de entrada</th>
                            <th>Tipo de prazo</th>
                            <th>Data prazo</th>
                            <th>Observação</th>
                        </tr>
                    </thead>
                    @forelse ($andamentos as $andamento)
                        <tr>

                            <td><a href="{{ route('andamentos.show',['id' => $andamento->id]) }}">{{ $andamento->tipoAndamento->nome }}</a></td>
                            <td>{{ $andamento->tipoEntrada->nome }}</td>
                            <td>{{ $andamento->tipoPrazo->nome }}</td>
                            <td>{{ $andamento->data_prazo }}</td>
                            <td>{{ $andamento->observacoes }}</td>
                        </tr>
                    @empty
                        <p>Nenhum andamento encontrado</p>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>

