@extends('layouts.app')



@section('content')
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-8 col-md-10">
                        <h4>
                            <a href="{{ route('opinionSubjects.index') }}">Assuntos</a>

                            @if(is_null($opinionSubject->id))
                                > NOVA
                            @else
                                > {{ $opinionSubject->identifier }}
                            @endif
                        </h4>
                    </div>

                    <div class="col-xs-4 col-md-2">
                        @include('partials.save-button')
                        @include('partials.edit-button', ['model' => $opinionSubject])
                    </div>
                </div>
            </div>

            <div class="panel-body">
                @include('partials.alerts')

                <form name="formulario" id="formulario" action="{{ route('opinionSubjects.store') }}" method="POST">
                    {{ csrf_field() }}

                    <input name="id" type='hidden' value="{{$opinionSubject->id}}" id="id" >

                    @if(is_null($opinionSubject->id))
                        <div class="row">
                            <div class="form-group col-md-6" @include('partials.disabled')>
                                <label for="parent_id">Árvore</label>

                                @include(
                                    'opinionSubjects.partials.selectTree',
                                    [
                                        'attributeName' => 'parent_id',
                                    ]
                                )

                            </div>
                        </div>
                    @else
                        <input name="parent_id" type='hidden' value="{{$opinionSubject->parent_id}}" id="parent_id" >
                    @endif



                    @foreach($opinionSubjectsFormAttributes as $attr)
                        <div class="row">
                            <div class="form-group col-md-6" @include('partials.disabled')>
                                <label for="{{$attr->name}}">{{$attr->showName}}</label>
                                @if($attr->type == 'date')
                                    <input
                                            value="{{ is_null(old($attr->name))? (! is_null($opinionSubject->id) ? $opinionSubject->{$attr->name} : '' ) :  old($attr->name)}}"
                                            type="date"
                                            class="form-control"
                                            name="{{$attr->name}}"
                                            id="{{$attr->name}}" @include('partials.readonly')
                                    />
                                @endif

                                @if($attr->type == 'string')
                                    <input name="{{$attr->name}}" value="{{is_null(old($attr->name)) ? $opinionSubject->{$attr->name} : old($attr->name)}}" @include('partials.readonly') class="form-control" id="{{$attr->name}}" aria-describedby="nomeHelp" placeholder="{{$attr->showName}}" >
                                @endif

                                @if($attr->type == 'id')
                                    <select name="{{$attr->name}}" class="select2 form-control" @include('partials.disabled') id="{{$attr->name}}">
                                        <option value="">SELECIONE</option>
                                        @foreach (${$attr->attributeArray} as $key => $item)
                                            @if(!is_null($opinionSubject->{$attr->relationName}) && $opinionSubject->{$attr->relationName}->id == $key
                                            || (!is_null(old($attr->name)))&& old($attr->name) == $key)
                                                <option value="{{ $key }}" selected="selected">{{ $item }}</option>
                                            @else
                                                <option value="{{ $key }}">{{ $item }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                @endif
                            </div>
                        </div>
                    @endforeach

                    @include('partials.save-button')
                </form>
            </div>
        </div>
@endsection
