@extends('layouts.app')

@section('content')
    <div class="panel panel-default" id="vue-processos">
        <div class="panel-heading hidden-print" id="cabecalho-processos">
            <div class="row">
                <div class="col-md-3">
                    <h3><span>@{{ tables.processos.length }}</span> Processo<span>@{{ tables.processos.length == 1 ? '' : 's' }}</span></h3>
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-8">
                            @include(
                                'layouts.partials.search-form-vue',
                                [
                                    'routeSearch' => 'home.index',
                                    'routeCreate' => 'processos.create'
                                ]
                            )
                        </div>

                        <div class="col-md-4 text-right">
                            <button type="button" :class="'btn ' + (advancedFilter ? 'btn-danger' : 'btn-default')" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-filter"></i> Filtro avançado
                            </button>
                            <button type="button" :class="'btn ' + (advancedFilter ? 'btn-danger' : 'btn-default')" @click="turnAdvancedFilterOff">
                                <i class="fa fa-close"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn btn-primary" @click="print()"><i class="fa fa-print"></i> Imprimir</div>
        </div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @include('processos.partials.table')
        </div>

        @include('home.partials.filter-modal', ['isFilter' => true])
    </div>
@endsection
