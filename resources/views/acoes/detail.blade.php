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

            <form action="{{ route('acoes.store') }}" method="POST">
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
                    <input name="nome" value="{{$acao->nome}}" readonly="readonly" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="nome" >
                    <label for="exampleInputEmail2">Abreviação</label>
                    <input name="abreviacao" value="{{$acao->abreviacao}}" readonly="readonly" class="form-control" id="abreviacao" aria-describedby="nomeHelp" placeholder="abreviacao" >
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


@endsection
