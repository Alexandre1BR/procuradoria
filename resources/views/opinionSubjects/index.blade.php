@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-3">
                    <h4>Assuntos</h4>
                </div>

                <div class="col-md-9">
                    <div class="form-group pull-right">
                        <div class="row">
                            <div class="col-xs-4">
                                    <a href="{{ route('opinionSubjects.create') }}" class="btn btn-danger pull-right">
                                        <i class="fa fa-plus"></i> Novo
                                    </a>
                            </div>

                            <div class="col-xs-8 pull-right">
                            </div>
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

            @include('opinionSubjects.partials.table')
        </div>
    </div>
@endsection
