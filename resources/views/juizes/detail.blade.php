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

            <form action="{{ route('juizes.store') }}" method="POST">
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
                    <label for="exampleInputEmail1">Nome</label>
                    <input name="nome" value="{{$juiz->nome}}" readonly="readonly" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="nome" >
                    <label for="exampleInputEmail2">Tipo Juíz</label>
                    <input name="tipojuiz" value="{{$juiz->tipojuiz->nome}}" readonly="readonly" class="form-control" id="tipojuiz" aria-describedby="nomeHelp" placeholder="tipojuiz" >
                    <label for="exampleInputEmail3">Tribunal</label>
                    <input name="lotacao" value="{{$juiz->lotacao->nome}}" readonly="readonly" class="form-control" id="lotacao" aria-describedby="nomeHelp" placeholder="lotacao" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


@endsection
