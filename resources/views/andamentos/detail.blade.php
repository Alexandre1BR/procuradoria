@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="form-group">
            <label for="Processo">Processo</label>
            <select name="processo_id" class="form-control" id="processo_id" aria-describedby="numero_judicialHelp" placeholder="Processo">
                @foreach ($processos as $key => $processo)
                    @if($key == $andamento->processo->id)
                        <option selected="true" value="{{ $key }}" >{{ $processo }}></option>
                    @else
                        <option value="{{ $key }}" >{{ $processo }}></option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            ppppppp                {{dd($andamento->$tipoAndamentos) }}
            <label for="tipo_andamento_id">Tipo de Andamento</label>
            <select name="tipo_andamento_id" class="form-control" id="tipo_andamento_id" aria-describedby="numero_judicialHelp" placeholder="Processo">

                @foreach ($tipoAndamentos as $key => $tipoAndamento)
                    @if($key == $andamento->$tipoAndamentos->id)
                        <option selected="true" value="{{ $key }}" >{{ $tipoAndamento }}</option>
                    @else
                        <option value="{{ $key }}" >{{ $tipoAndamento }}></option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="Processo">Tipo de Entrada</label>
            <select name="tipo_entrada_id" class="form-control" id="tipo_entrada_id" aria-describedby="numero_judicialHelp" placeholder="Processo">
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
            <select name="tipo_prazo_id" class="form-control" id="tipo_prazo_id" aria-describedby="numero_judicialHelp" placeholder="tipo_prazo_id">
                <option selected="true" value="">Selecione</option>
                @foreach ($tipoPrazos as $key => $prazo)
                    @if($key == $andamento->$tipoPrazos->id)
                        <option selected="true" value="{{ $key }}" >{{ $prazo }}</option>
                    @else
                        <option value="{{ $key }}" >{{ $prazo }}></option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="data_prazo">Data Prazo</label>
            <input  type="date"  name="data_prazo" value="{{$andamento->data_prazo}}" class="form-control" id="data_prazo" placeholder="Data Prazo" >
        </div>

        <div class="form-group">
            <label for="data_entrega">Data Entrega</label>
            <input  type="date" name="data_entrega" value="{{$andamento->data_entrega}}" class="form-control" id="data_entrega" placeholder="Data Entrega" >
        </div>
        <div class="form-group">
            <label for="data_prazo">Observação</label>
            <textarea  type="date" name="observacoes" class="form-control" id="observacoes" placeholder="" value="{{$andamento->observacao}}"></textarea>
        </div>
    </div>

@endsection
