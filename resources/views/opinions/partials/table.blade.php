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

<table id="opinionsTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    @if(!is_null($opinions))
    <thead>
        @forelse($attributes as $attr)
            <th>{{$attr->showName}}</th>
        @empty
        @endforelse
    </thead>
    @endif

    @forelse ($opinions as $opinion)
        <tr>
            @forelse($attributes as $attr)
                @if($attr->name == $editAttribute)
                    <td width="{{$attr->columnSize}}"><a href="{{$opinion->edit_link}}">{{ $opinion->identifier }}</a></td>
                @else
                    @if($attr->type == 'id')
                        <td width="{{$attr->columnSize}}">{{ is_null($opinion->{$attr->relationName}->{$attr->foreignName}) ? : $opinion->{$attr->relationName}->{$attr->foreignName} }}</td>
                    @else
                        <td width="{{$attr->columnSize}}">{{ is_null($opinion->{$attr->name}) ? : $opinion->{$attr->name} }}</td>
                    @endif
                @endif
            @empty
            @endforelse
        </tr>
    @empty
        <p>Nenhuma opinião encontrada</p>
    @endforelse
</table>