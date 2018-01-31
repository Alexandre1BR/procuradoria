@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-3">
                    <h4>
                        <a href="{{ route('tribunais.index') }}">Tribunais</a>

                        @if(is_null($tribunal->id))
                            > NOVO
                        @else
                            > {{ $tribunal->nome }}
                        @endif
                    </h4>
                </div>

                @include('partials.edit-button', ['model' => $tribunal])
            </div>
        </div>

        <div class="panel-body">
            @include('partials.alerts')

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
                    <label for="nome">Nome</label>
                    <input name="nome" value="{{is_null(old('nome')) ? $tribunal->nome : old('nome')}}" @include('partials.readonly') class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="nome">
                    <label for="abreviacao">Abreviação</label>
                    <input name="abreviacao" value="{{is_null(old('abreviacao')) ? $tribunal->abreviacao : old('abreviacao')}}" @include('partials.readonly') class="form-control" id="abreviacao" aria-describedby="abreviacaoHelp" placeholder="abreviacao">
                </div>

                @include('partials.save-button')
            </form>
        </div>
    </div>

    @include('partials.processos')

@endsection
