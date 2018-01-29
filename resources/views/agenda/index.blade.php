@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-3">
                    <h4>Agenda</h4>
                </div>

                <div class="col-md-9">
                    @include(
                        'layouts.partials.search-form',
                        [
                            'routeSearch' => 'acoes.index',
                            'routeCreate' => 'andamentos.create',
                        ]
                    )
                </div>
            </div>
        </div>

        <div class="panel-body">
            @include('agenda.partials.calendar')
        </div>
    </div>
@endsection
