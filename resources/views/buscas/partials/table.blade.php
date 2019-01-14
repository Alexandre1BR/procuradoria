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
            <th>Número Judicial</th>
            <th>Número Alerj</th>
            <th>Tribunal</th>
            <th>Texto</th>
            <th>Termo de busca</th>
            <th>Recebido em</th>
            <th>Situação</th>
            <th>Opções</th>
        </tr>
    </thead>

    @forelse ($proceedings as $proceeding)
        @php
            $processo = $proceeding->processo()
        @endphp

        <tr>
            <td>
                {{ $proceeding->number }}
            </td>
            <td>
                @if ($processo)
                    {{ $processo->numero_alerj }}
                @endif
            </td>
            <td>
                {{ $proceeding->court }}
            </td>
            <td>
                @foreach ($proceeding->scraped_lines as $line)
                    <p>{{ $line }}</p>
                @endforeach
            </td>
            <td>
                {{ $proceeding->search_term }}
            </td>
            <td>
                {{ $proceeding->created_at }}
            </td>

            <td class="text-center" style="vertical-align: middle;">
                @if ($proceeding->imported_at)
                    <span class="badge progress-bar-danger">
                        IMPORTADO<br><br>
                        {{ $proceeding->imported_at }}<br>
                        {{ $proceeding->importedBy()->name }}
                    </span>
                @elseif ($proceeding->ignored_at)
                    <span class="badge progress-bar-warning">
                        IGNORADO<br><br>
                        {{ $proceeding->ignored_at }}<br>
                        {{ $proceeding->ignoredBy()->name }}
                    </span>
                @elseif ($processo)
                    <span class="badge progress-bar-success">
                        cadastrado manualmente
                    </span>
                @endif
            </td>
            <td class="text-center" style="vertical-align: middle;">
                @if (!$processo && !$proceeding->imported_at && !$proceeding->ignored_at)
                    <a href="{{ route('buscas.import', ['id' => $proceeding->id]) }}" class="btn btn-danger btn-sm">
                        importar
                    </a>
                    <a href="{{ route('buscas.ignore', ['id' => $proceeding->id]) }}" class="btn btn-success btn-sm">
                        ignorar
                    </a>
                @endif
            </td>
        </tr>
    @empty
        <p>Nenhum termo de busca encontrado</p>
    @endforelse
</table>

