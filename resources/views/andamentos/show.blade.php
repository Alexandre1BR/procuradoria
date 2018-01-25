@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Andamento</div>

        <script>
            function f_editar() {
                $('form *').removeAttr('readonly').removeAttr('disabled');
            }
        </script>

        <form action="{{ route('andamentos.store') }}" method="POST">
            <div class="form-group">
                <label for="Processo">Andamentos</label>
                <div class="col-md-9">
                    <a href="#" class="btn btn-primary pull-right" onclick="f_editar()">editar</a>
                </div>
                    {{ csrf_field() }}
                    <input name="id" type="hidden" value="{{$andamento->id}}">
                <select name="processo_id" class="form-control" id="processo_id" aria-describedby="numero_judicialHelp" placeholder="Processo" @include('partials.disabled')>
                    @foreach ($processos as $key => $processo)
                        @if($key == $andamento->processo->id)
                            <option selected="true" value="{{ $key }}" >{{ $processo }}c</option>
                        @else
                            <option value="{{ $key }}" >{{ $processo }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tipo_andamento_id">Tipo de Andamento</label>
                <select name="tipo_andamento_id" class="form-control" id="tipo_andamento_id" aria-describedby="numero_judicialHelp" placeholder="Processo" @include('partials.disabled')>

                    @foreach ($tipoAndamentos as $key => $tipoAndamento)
                        @if($key == $andamento->tipoAndamento->id)
                            <option selected="true" value="{{ $key }}" >{{ $tipoAndamento }}</option>
                        @else
                            <option value="{{ $key }}" >{{ $tipoAndamento }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="Processo">Tipo de Entrada</label>
                <select name="tipo_entrada_id" class="form-control" id="tipo_entrada_id" aria-describedby="numero_judicialHelp" placeholder="Processo" @include('partials.disabled')>
                    <option selected="true" value="">Selecione</option>
                    @foreach ($tipoEntradas as $key => $tipoEntrada)
                        @if($key == $andamento->tipoEntrada->id)
                            <option selected="true" value="{{ $key }}" >{{ $tipoEntrada }}</option>
                        @else
                            <option value="{{ $key }}" >{{ $tipoEntrada }}></option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="Processo">Tipo Prazo</label>
                <select name="tipo_prazo_id" class="form-control" id="tipo_prazo_id" aria-describedby="numero_judicialHelp" placeholder="tipo_prazo_id" @include('partials.disabled')>
                    <option selected="true" value="">Selecione</option>
                    @foreach ($tipoPrazos as $key => $prazo)
                        @if($key == $andamento->tipoPrazo->id)
                            <option selected="true" value="{{ $key }}" >{{ $prazo }}</option>
                        @else
                            <option value="{{ $key }}" >{{ $prazo }}></option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="data_prazo">Data Prazo</label>
                {{--<input  value="{{$andamento->data_prazo}}"  type="date"  name="data_prazo" class="form-control" id="data_prazo" placeholder="Data Prazo" @include('partials.disabled') >--}}
                <input  value="{{Carbon\Carbon::parse($andamento->data_prazo)->format('Y-m-d')}}"  type="date"  name="data_prazo" class="form-control" id="data_prazo" placeholder="Data Prazo" @include('partials.disabled') >
            </div>

            <div class="form-group">
                <label for="data_entrega">Data Entrega</label>
                <input  value="{{$andamento->data_entrega}}" type="date" name="data_entrega" class="form-control" id="data_entrega" placeholder="Data Entrega" @include('partials.disabled')>
            </div>
            <div class="form-group">
                <label for="observacoes">Observação</label>
                <textarea   name="observacoes" class="form-control" id="observacoes" placeholder="" @include('partials.disabled')>{{$andamento->observacoes}}</textarea>
            </div>

            @include('partials.save-button')
        </form>
    </div>
@endsection
