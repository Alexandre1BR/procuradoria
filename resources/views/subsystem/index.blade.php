@extends('layouts.app')

@section('content')
    <div class="panel panel-default" id="vue-agenda">
        <div class="panel-heading hidden-print">
            <div class="row text-center">
                <div class="col-md-12">
                    <br><br><br><br>
                    <h1>Em qual sistema deseja entrar?</h1>
                </div>

                <div class="col-md-12">
                    <br><br><br><br>

                    <a
                        class="btn btn-lg btn-primary"
                        style="font-size: 3em;"
                        href="{{ route('subsystem.select', ['type' => App\Support\Constants::SUBSYSTEM_PROCESSOS]) }}"
                    >
                        Processos
                    </a>

                    <a
                        class="btn btn-lg btn-primary"
                        style="font-size: 3em;"
                        href="{{ route('subsystem.select', ['type' => App\Support\Constants::SUBSYSTEM_OPINIOES]) }}"
                    >
                        Pareceres
                    </a>

                    <br><br><br><br>
                </div>
            </div>
        </div>
    </div>
@endsection
