@extends('layouts.app')

@section('content')

    <div class="panel panel-default ">
        <div class="panel-heading hidden-print">
            <div class="row">
                <div class="col-md-3">
                    <h4>Agenda</h4>
                </div>

                <div class="col-md-9 hidden-print">
                    <div class="form-group pull-right">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="{{ route('andamentos.create') }}" class="btn btn-danger pull-right">
                                    <i class="fa fa-plus"></i> Novo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-body">
            @include('agenda.partials.calendar')
        </div>
    </div>
@endsection
