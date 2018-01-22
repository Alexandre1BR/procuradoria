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
        <th>&nbsp;</th>
        <th>Nome</th>
        <th>Tipo Juíz</th>
        <th>Tribunal</th>
    </tr>
    </thead>

    @forelse ($juizes as $juiz)
        <tr>
            <td><a href="{{ action('Juizes@detail', 'id=').$juiz['id']}}">Detalhe Juiz</a></td>
            <td>{{ is_null($juiz->nome) ? : $juiz->nome }}</td>
            <td>{{ is_null($juiz->tipojuiz->nome) ? : $juiz->tipojuiz->nome }}</td>
            <td>{{ is_null($juiz->lotacao->nome) ? : $juiz->lotacao->nome }}</td>
        </tr>
    @empty
        <p>Nenhum juíz encontrado</p>
    @endforelse
</table>
