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

            <a href="{{ route('processos.create') }}">Procuradoria</a>

            <form action="{{ route('processos.store') }}" method="POST">
                {{ csrf_field() }}

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label for="exampleInputEmail1">Número Judicial</label>
                    <input name="numero_judicial" class="form-control" id="exampleInputEmail1" aria-describedby="numero_judicialHelp" placeholder="Número Judicial">
                    <small id="numero_judicialHelp" class="form-text text-muted">We'll never share your numero_judicial with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Número Alerj</label>
                    <input name="numero_alerj" class="form-control" id="exampleInputPassword1" placeholder="Número Alerj">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
