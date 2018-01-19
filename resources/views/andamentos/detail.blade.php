@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="form-group">
            <label for="Processo">Processo</label>
            <select name="processo_id" class="form-control" id="processo_id" aria-describedby="numero_judicialHelp" placeholder="Processo" disabled="disabled">
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
            <select name="tipo_andamento_id" class="form-control" id="tipo_andamento_id" aria-describedby="numero_judicialHelp" placeholder="Processo" disabled="disabled">

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
            <select name="tipo_entrada_id" class="form-control" id="tipo_entrada_id" aria-describedby="numero_judicialHelp" placeholder="Processo" disabled="disabled">
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
            <select name="tipo_prazo_id" class="form-control" id="tipo_prazo_id" aria-describedby="numero_judicialHelp" placeholder="tipo_prazo_id" disabled="disabled">
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


            <input  value="{{$andamento->data_prazo}}"  type="date"  name="data_prazo" class="form-control" id="data_prazo" placeholder="Data Prazo" readonly="readonly" >
        </div>

        <div class="form-group">
            <label for="data_entrega">Data Entrega</label>
            <input  value="{{$andamento->data_entrega}}" name="data_entrega" class="form-control" id="data_entrega" placeholder="Data Entrega" disabled="disabled">
        </div>
        <div class="form-group">
            <label for="observacoes">Observação</label>
            <textarea   name="observacoes" class="form-control" id="observacoes" placeholder="" disabled="disabled">{{$andamento->observacao}}</textarea>
        </div>
    </div>

@endsection
