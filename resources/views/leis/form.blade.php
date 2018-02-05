@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-10">
                    <h4>
                        <a href="{{ route('leis.index') }}">Leis</a>

                        @if(is_null($lei->id))
                            > NOVO
                        @else
                            > {{ $lei->nome }}
                        @endif
                    </h4>
                </div>

                <div class="col-xs-1">
                    @include('partials.edit-button', ['model' => $lei])
                </div>
            </div>
        </div>

        <div class="panel-body">
            @include('partials.alerts')

            <form action="{{ route('leis.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="row">
                    <input name="id" type='hidden' value="{{$lei->id}}" id="id" >
                    <input name="processo_id" type='hidden' value="{{$processo_id}}" id="processo_id" >
                    <div class="form-group col-md-4">
                        <label for="numero_lei">Número lei</label>
                        <input value="{{$lei->numero_lei}}" name="numero_lei" class="form-control" id="numero_lei" placeholder="Número Lei" @include('partials.readonly')>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="autor">Autor</label>
                        <input value="{{$lei->autor}}" name="autor" class="form-control" id="autor" placeholder="Autor da Lei" @include('partials.readonly')>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="assunto">Assunto</label>
                        <input value="{{$lei->assunto}}" name="assunto" class="form-control" id="assunto" placeholder="Assunto da Lei" @include('partials.readonly')>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="link">Link</label>
                        <input value="{{$lei->link}}" name="link" class="form-control" id="link" placeholder="Link da Lei" @include('partials.readonly')>
                    </div>
                </div>

                @include('partials.save-button')

            </form>
        </div>
    </div>

@endsection
