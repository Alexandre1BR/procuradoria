@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-3">
                    <h3>Ações</h3>
                </div>

                <div class="col-md-9">
                    @include('andamentos.partials.form')
                </div>
            </div>
        </div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @include('andamentos.partials.table')
        </div>
    </div>
@endsection
