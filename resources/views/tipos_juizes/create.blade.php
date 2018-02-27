@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <a href="{{ route('home.index') }}">Procuradoria</a>

            <form action="{{ route('tipos_juizes.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="nome">Nome</label>
                        <input name="nome" class="form-control" id="nome" placeholder="Nome">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
