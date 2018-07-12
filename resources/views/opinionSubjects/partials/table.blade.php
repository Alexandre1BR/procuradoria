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

<table id="opinionSubjectsTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    @if(!is_null($opinionSubjects))
    <thead>
        @forelse($opinionSubjectsAttributes as $attr)
            <th>{{$attr->showName}}</th>
        @empty
        @endforelse
    </thead>
    @endif

    @forelse ($opinionSubjects as $opinionSubject)
        <tr>
            @forelse($opinionSubjectsAttributes as $attr)
                @if($attr->name == $opinionSubjectsEditAttribute)
                    {{--Atributo com o nome já identado--}}
                    <td class="level-{{$opinionSubject->level}}" width="{{$attr->columnSize}}"><a href="{{$opinionSubject->edit_link}}">{{ $opinionSubject->indented_name}}</a></td>

                    {{--Atributo com o nome completo--}}
{{--                    <td class="level-{{$opinionSubject->level}}" width="{{$attr->columnSize}}"><a href="{{$opinionSubject->edit_link}}">{{ $opinionSubject->{$opinionSubjectsEditAttribute} }}</a></td>--}}
                @else
                    @if($attr->type == 'id')
                        <td width="{{$attr->columnSize}}">{{ is_null($opinionSubject->{$attr->relationName}->{$attr->foreignName}) ? : $opinionSubject->{$attr->relationName}->{$attr->foreignName} }}</td>
                    @else
                        <td width="{{$attr->columnSize}}">{{ is_null($opinionSubject->{$attr->name}) ? : $opinionSubject->{$attr->name} }}</td>
                    @endif
                @endif
            @empty
            @endforelse
        </tr>
    @empty
        <p>Nenhum assunto encontrado</p>
    @endforelse
</table>