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
        <th>Tribunal</th>
        <th>Tipo juiz</th>
    </tr>
    </thead>

    @forelse ($juizes as $juiz)
        <tr>
            <td><a href="{{ route('juizes.show', ['id' => $juiz->id]) }} ">{{ is_null($juiz->nome) ? : $juiz->nome }}</a></td>
            <td>{{ is_null($juiz->lotacao->nome) ? : $juiz->lotacao->nome }}</td>
            <td>{{ is_null($juiz->tipojuiz->nome) ? : $juiz->tipojuiz->nome }}</td>
        </tr>
    @empty
        <p>Nenhum juiz encontrado</p>
    @endforelse
</table>
