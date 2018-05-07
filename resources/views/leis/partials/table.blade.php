<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Número lei</th>
        <th>Autor</th>
        <th>Assunto</th>
        <th>Link</th>
    </tr>
    </thead>
    @forelse ($leis as $lei)
        <tr>
            <td><a href="{{ route('leis.show',['id' => $lei->id]) }}">{{ $lei->lei_formatada }}</a></td>
            {{--<td><a href="{{ route('leis.show', ['id' => $lei->id]) }} ">{{ is_null($lei->numero_lei) ? : $lei->numero_lei }}</a></td>--}}
            <td>{{ $lei->autor }}</td>
            <td>{{ $lei->assunto }}</td>
            <td>{{ $lei->link }}</td>
        </tr>
    @empty
        <p>Nenhuma lei encontrada</p>
    @endforelse
</table>
