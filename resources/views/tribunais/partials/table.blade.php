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

<table id="tribunalTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Abreviação</th>
    </tr>
    </thead>

    @forelse ($tribunais as $tribunal)
        <tr>
            <td><a href="{{ route('tribunais.show', ['id' => $tribunal->id]) }}">{{ is_null($tribunal->nome) ? : $tribunal->nome }}</a></td>
            <td>{{ is_null($tribunal->abreviacao) ? : $tribunal->abreviacao }}</td>
        </tr>
    @empty
        <p>Nenhum tribunal encontrado</p>
    @endforelse
</table>
