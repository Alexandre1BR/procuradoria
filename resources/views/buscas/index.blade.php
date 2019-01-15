@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Buscas em Tribunais</h3>
                        </div>

                        <div class="col-md-6">
                            @if($lastLog)
                                <div class="well well-sm bg-success text-center" style="margin-bottom: 0; background-color: #2ab27b; color: white;">
                                    <h5 style="color: white;">Última atualização</h5>
                                    <h4 class="mb-2 text-muted" style="color: white;">{{ $lastLog->created_at }}</h4>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    @include(
                        'layouts.partials.search-form',
                        [
                            'routeSearch' => 'buscas.index',
                            //'routeCreate' => 'buscas.create',
                        ]
                    )
                </div>
            </div>
        </div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @include('buscas.partials.table')
        </div>
    </div>
@endsection
