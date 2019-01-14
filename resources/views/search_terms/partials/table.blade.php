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

<table id="searchTermTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Termo</th>
        </tr>
    </thead>

    @forelse ($searchTerms as $term)
        <tr>
            <td><a href="{{ route('search_terms.show', ['id' => $term->id]) }}">{{ $term->text }}</a></td>
        </tr>
    @empty
        <p>Nenhum termo de busca encontrado</p>
    @endforelse
</table>
