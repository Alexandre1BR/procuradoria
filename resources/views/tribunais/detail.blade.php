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
            <script>
                function f_editar() {
                    $('form *').removeAttr('readonly').removeAttr('disabled');
                }

            </script>
            <a href="#" onclick="f_editar()"> editar </a>

            <form action="{{ route('tribunais.store') }}" method="POST">
                {{ csrf_field() }}
                <input name="id" type="text" value="{{$tribunal->id}}"/>

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
                    <input name="nome" value="{{$tribunal->nome}}" readonly="readonly" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="nome">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
