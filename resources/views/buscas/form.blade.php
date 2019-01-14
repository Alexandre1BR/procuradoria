@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-8 col-md-10">
                    <h4>
                        <a href="{{ route('search_terms.index') }}">Termos para Busca</a>

                        @if(is_null($searchTerm->id))
                            > NOVO
                        @else
                            > {{ $searchTerm->text }}
                        @endif
                    </h4>
                </div>

                <div class="col-xs-4 col-md-2">
                    @include('partials.save-button')
                    @include('partials.edit-button', ['model' => $searchTerm])
                </div>
            </div>
        </div>

        <div class="panel-body">

            <form name="formulario" id="formulario" action="{{ route('search_terms.store') }}" method="POST">
                {{ csrf_field() }}

                <input name="id" type="hidden" value="{{ $searchTerm->id }}"/>

                <div class="form-group">
                    <label for="text">Termo</label>
                    <input name="text" value="{{ is_null(old('text')) ? $searchTerm->text : old('text')}}" @include('partials.readonly') class="form-control" id="text" aria-describedby="termoHelp" placeholder="Termo de busca">
                </div>

                @include('partials.save-button')
            </form>
        </div>
    </div>
@endsection
