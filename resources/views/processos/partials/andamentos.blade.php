<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-3">
                <h4>
                    Andamentos
                </h4>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <form action="{{ route('andamentos.create_post') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="processo_id" value = {{$processo->id}}>
            Andamentos
            <input type="submit" value="Novo Andamento">
        </form>

        <div class="row">
            <div class="col-md-12">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>

                        <tr>
                            <th>Tipo de Andamento</th>
                            <th>Tipo de Entrada</th>
                            <th>Tipo de Prazo</th>
                            <th>Data Prazo</th>
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
                        <p>Nenhum Andamento encontrado</p>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>

