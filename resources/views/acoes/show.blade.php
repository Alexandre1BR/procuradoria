@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-3">
                    Processos
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
                function f_editar(){
                    $('form *').removeAttr('readonly').removeAttr('disabled');
                }
            </script>

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

                <div class="row">
                    <div class="form-group col-md-4" disabled="disabled">
                        <input name="id" type='hidden' value="{{$acao->id}}" id="id" >
                        <label for="exampleInputEmail1">Nome</label>
                        <input name="nome" value="{{$acao->nome}}" readonly="readonly" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="nome" >
                        <label for="exampleInputEmail2">Abreviação</label>
                        <input name="abreviacao" value="{{$acao->abreviacao}}" readonly="readonly" class="form-control" id="abreviacao" aria-describedby="nomeHelp" placeholder="abreviacao" >
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