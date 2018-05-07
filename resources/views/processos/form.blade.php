@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-8 col-md-10">
                    <h4>
                        <a href="{{ route('home.index') }}">Processos</a>

                        @if(!isset($processo) || is_null($processo->id))
                            > NOVO
                        @else
                            > {{ $processo->numero_judicial ?: $processo->numero_alerj }}
                        @endif
                    </h4>
                </div>

                <div class="col-xs-4 col-md-2">
                    @include('partials.save-button')
                    @include('partials.edit-button', ['model' => $processo])
                </div>
            </div>
        </div>

        <div class="panel-body">
            @include('partials.alerts')

            @include('processos.partials.form')
        </div>
    </div>
    @if(isset($processo) && !is_null($processo->id))
        @include('processos.partials.andamentos')

        @include('processos.partials.apensos')

        @if(app()->environment('local'))
            @include('processos.partials.leis')
        @endif
    @endif
@endsection
