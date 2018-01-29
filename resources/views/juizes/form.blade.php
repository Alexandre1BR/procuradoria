@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-3">
                    <h4>
                        <a href="{{ route('juizes.index') }}">Juizes</a>

                        @if(is_null($juiz->id))
                            > NOVO
                        @else
                            > {{ $juiz->nome }}
                        @endif
                    </h4>
                </div>

                @include('partials.edit-button', ['model' => $juiz])
            </div>
        </div>

        <div class="panel-body">
            @include('partials.alerts')

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

                <div class="row">
                    <input name="id" type='hidden' value="{{$juiz->id}}" id="id" >
                    <div class="form-group col-md-4">
                        <label for="nome">Nome</label>
                        <input value="{{$juiz->nome}}" name="nome" class="form-control" id="nome" placeholder="Nome" @include('partials.readonly')>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="lotacao_id">Lotação</label>
                        <select name="lotacao_id" class="js-example-basic-single form-control" @include('partials.disabled') id="lotacao_id">
                            @foreach ($tribunais as $key => $tribunal)
                                @if(!is_null($juiz->lotacao) && $juiz->lotacao->id == $key)
                                    <option value="{{ $key }}" selected="selected">{{ $tribunal }}</option>
                                @else
                                    <option value="{{ $key }}">{{ $tribunal }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="tipo_juiz_id">Tipo Juiz</label>
                        <select name="tipo_juiz_id" class="js-example-basic-single form-control" @include('partials.disabled') id="tipo_juiz_id">
                            @foreach ($tiposJuizes as $key => $tipojuiz)
                                @if(!is_null($juiz->tipoJuiz) && $juiz->tipoJuiz->id == $key)
                                    <option value="{{ $key }}" selected="selected">{{ $tipojuiz }}</option>
                                @else
                                    <option value="{{ $key }}">{{ $tipojuiz }}</option>
                                @endif
                            @endforeach
                        </select>

                    </div>
                </div>

                @include('partials.save-button')
            </form>
        </div>
    </div>
@endsection
