@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-3">
                                Juizes
                            </div>

                            <div class="col-md-9">
                                @include('juizes.partials.search-form')
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @include('juizes.partials.search-table')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
