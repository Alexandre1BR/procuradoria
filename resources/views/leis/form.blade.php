@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-8 col-md-10">
                    <h4>
                        <a href="{{ route('leis.index') }}">Leis</a>

                        @if(is_null($lei->id))
                            > NOVO
                        @else
                            > {{ $lei->nome }}
                        @endif
                    </h4>
                </div>

                <div class="col-xs-4 col-md-2">
                    @include('partials.save-button')
                    @include('partials.edit-button', ['model' => $lei])
                </div>
            </div>
        </div>

        <div class="panel-body">
            @include('partials.alerts')

            <form name="formulario" id="formulario"
                  @if(isset($processo_id))
                    action="{{ route('leis.store',['processo_id'=>$processo_id]) }}"
                  @else
                    action="{{ route('leis.store') }}"
                  @endif
                  method="POST">
                {{ csrf_field() }}
                {{--Tipo de Norma--}}
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="tipo_lei_id">Tipo de norma</label>
                        <select name="tipo_lei_id" class="select2 form-control" @include('partials.disabled') id="tipo_lei_id">
                            <option value="">SELECIONE</option>
                            @foreach ($tiposLeis as $key => $tipoLei)
                                @if((!is_null($lei->tipoLei)) && $lei->tipoLei->id == $key
                                    || (!is_null(old('tipo_lei_id')))&& old('tipo_lei_id') == $key)
                                    <option value="{{ $key }}" selected="selected">{{ $tipoLei }}</option>
                                @else
                                    <option value="{{ $key }}">{{ $tipoLei }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                {{--Nível federativo--}}
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="nivel_federativo_id">Nível federativo</label>
                        <select name="nivel_federativo_id" class="select2 form-control" @include('partials.disabled') id="nivel_federativo_id">
                            <option value="">SELECIONE</option>
                        @foreach ($niveisFederativos as $key => $nivelFederativo)
                            @if((!is_null($lei->nivelFederativo)) && $lei->nivelFederativo->id == $key
                                    || (!is_null(old('nivel_federativo_id')))&& old('nivel_federativo_id') == $key)
                                    <option value="{{ $key }}" selected="selected">{{ $nivelFederativo }}</option>
                                @else
                                    <option value="{{ $key }}">{{ $nivelFederativo }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <input name="id" type='hidden' value="{{$lei->id}}" id="id" >
                    <div class="form-group col-md-4">
                        <label for="numero_lei">Número lei</label>
                        <input value="{{$lei->numero_lei}}" name="numero_lei" class="form-control" id="numero_lei" placeholder="Número lei" @include('partials.readonly')>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="autor">Autor</label>
                        <input value="{{$lei->autor}}" name="autor" class="form-control" id="autor" placeholder="Autor da lei" @include('partials.readonly')>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="assunto">Assunto</label>
                        <input value="{{$lei->assunto}}" name="assunto" class="form-control" id="assunto" placeholder="Assunto da lei" @include('partials.readonly')>
                    </div>
                </div>
                {{--Artigo--}}
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="autor">Artigo</label>
                        <input value="{{$lei->artigo}}" name="artigo" class="form-control" id="artigo" placeholder="Artigo da norma" @include('partials.readonly')>
                    </div>
                </div>
                {{--Parágrafo--}}
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="autor">Parágrafo</label>
                        <input value="{{$lei->paragrafo}}" name="paragrafo" class="form-control" id="paragrafo" placeholder="Parágrafo da norma" @include('partials.readonly')>
                    </div>
                </div>
                {{--Inciso--}}
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="autor">Inciso</label>
                        <input value="{{$lei->inciso}}" name="inciso" class="form-control" id="inciso" placeholder="Inciso da norma" @include('partials.readonly')>
                    </div>
                </div>
                {{--Alínea--}}
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="autor">Alínea</label>
                        <input value="{{$lei->alinea}}" name="alinea" class="form-control" id="alinea" placeholder="Alínea da norma" @include('partials.readonly')>
                    </div>
                </div>
                {{--Item--}}
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="autor">Item</label>
                        <input value="{{$lei->item}}" name="item" class="form-control" id="item" placeholder="Item da norma" @include('partials.readonly')>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="link">Link</label>
                        <input value="{{$lei->link}}" name="link" class="form-control" id="link" placeholder="Link da norma" @include('partials.readonly')>
                    </div>
                </div>

                @include('partials.save-button')

            </form>
        </div>
    </div>

@endsection
