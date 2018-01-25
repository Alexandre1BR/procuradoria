@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-3">
                    <h4>Tribunais</h4>
                </div>

                <div class="col-md-9">
                    <a href="#" class="btn btn-primary pull-right" onclick="f_editar()">editar</a>
                </div>
            </div>
        </div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <script>
                function f_editar() {
                    $('form *').removeAttr('readonly').removeAttr('disabled');
                }
            </script>

            <form action="{{ route('tribunais.store') }}" method="POST">
                {{ csrf_field() }}

                <input name="id" type="hidden" value="{{$tribunal->id}}"/>

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
                    <input name="nome" value="{{$tribunal->nome}}" @include('partials.readonly') class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="nome">
                </div>

                @include('partials.save-button')
            </form>
        </div>
    </div>
@endsection
