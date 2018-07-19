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
        <th>ID&nbsp;#&nbsp;&nbsp;</th>
        @forelse($opinionsAttributes as $attr)
            <th>{{$attr->showName}}</th>
        @empty
        @endforelse
    </thead>
    @endif

    @forelse ($opinions as $opinion)
        <tr>
            <td width="20px">
                <a href="{{$opinion->edit_link}}">
                    {{ $opinion->id }}
                </a>
            </td>

            @forelse($opinionsAttributes as $attr)
                @if($attr->type == 'id')
                    <td width="{{$attr->columnSize}}">
                        {{ is_null($opinion->{$attr->relationName}->{$attr->foreignName}) ? '' : $opinion->{$attr->relationName}->{$attr->foreignName} }}
                    </td>
                @else
                    <td width="{{$attr->columnSize}}">{{ is_null($opinion->{$attr->name}) ? '' : $opinion->{$attr->name} }}</td>
                @endif
            @empty
            @endforelse
        </tr>
    @empty
        <p>Nenhum parecer encontrado</p>
    @endforelse
</table>
