@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-3">
                    <h4>
                        <a href="{{ route('home.index') }}">Processos</a>

                        @if(is_null($processo->id))
                            > NOVO
                        @else
                            > {{ $processo->numero_judicial ?: $processo->numero_alerj }}
                        @endif
                    </h4>
                </div>

                @include('partials.edit-button', ['model' => $processo])
            </div>
        </div>

        <div class="panel-body">
            @include('partials.alerts')

            @include('processos.partials.form')
        </div>
    </div>

    @include('processos.partials.andamentos')

    @include('processos.partials.apensos')

    @include('processos.partials.leis')
@endsection
