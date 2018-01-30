@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-3">
                    <h3>Processos</h3>
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-2 pull-right">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-filter"></i> Filtro avançado
                            </button>
                        </div>

                        <div class="col-md-10">
                            @include(
                                'layouts.partials.search-form',
                                [
                                    'routeSearch' => 'home.index',
                                    'routeCreate' => 'processos.create',
                                ]
                            )
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @include('processos.partials.table')
        </div>
    </div>

    @include('home.partials.filter-modal', ['isFilter' => true])
@endsection
