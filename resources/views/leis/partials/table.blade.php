{{--@if(session()->has('message'))--}}
    {{--<div class="alert alert-success">--}}
        {{--{{ session()->get('message') }}--}}
    {{--</div>--}}
{{--@endif--}}

{{--@if(session()->has('warning'))--}}
    {{--<div class="alert alert-warning">--}}
        {{--{{ session()->get('warning') }}--}}
    {{--</div>--}}
{{--@endif--}}

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Número Lei</th>
        <th>Autor</th>
        <th>Assunto</th>
        <th>Link</th>
    </tr>
    </thead>
    @forelse ($leis as $lei)
        <tr>
            <td><a href="{{ route('leis.show',['id' => $lei->id]) }}">{{ $lei->numero_lei }}</a></td>
            {{--<td><a href="{{ route('leis.show', ['id' => $lei->id]) }} ">{{ is_null($lei->numero_lei) ? : $lei->numero_lei }}</a></td>--}}
            <td>{{ $lei->autor }}</td>
            <td>{{ $lei->assunto }}</td>
            <td>{{ $lei->link }}</td>
        </tr>
    @empty
        <p>Nenhuma Lei encontrada</p>
    @endforelse
</table>
