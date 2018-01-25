@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-3">
                    <h4>
                        <a href="{{ route('acoes.index') }}">Ações</a>

                        @if(is_null($acao->id))
                            > NOVA
                        @else
                            > {{ $acao->nome }}
                        @endif
                    </h4>
                </div>

                @include('partials.edit-button', ['model' => $acao])
            </div>
        </div>

        <div class="panel-body">
            @include('partials.alerts')

            <form action="{{ route('acoes.store') }}" method="POST">
                {{ csrf_field() }}

                <input name="id" type='hidden' value="{{$acao->id}}" id="id" >

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
                    <div class="form-group col-md-6" @include('partials.disabled')>
                        <label for="nome">Nome</label>
                        <input name="nome" value="{{$acao->nome}}" @include('partials.readonly') class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="nome" >
                    </div>

                    <div class="form-group col-md-6" @include('partials.disabled')>
                        <label for="abreviacao">Abreviação</label>
                        <input name="abreviacao" value="{{$acao->abreviacao}}" @include('partials.readonly') class="form-control" id="abreviacao" aria-describedby="nomeHelp" placeholder="abreviacao" >
                    </div>
                </div>

                @include('partials.save-button')
            </form>
        </div>
    </div>
@endsection
