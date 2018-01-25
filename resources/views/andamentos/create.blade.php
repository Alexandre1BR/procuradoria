@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <a href="{{ route('andamentos.create') }}">Procuradoria</a>

            <form action="{{ route('andamentos.store') }}" method="POST">
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

                <div class="form-group">
                    <label for="Processo">Processo</label>
                    @if(!isset($processo_id_post))
                        <select name="processo_id" class="form-control" id="processo_id" aria-describedby="numero_judicialHelp" placeholder="Processo">
                            <option selected="selected" value="">Selecione</option>
                            @foreach ($processos as $key => $processo)
                                <option value="{{ $key }}" >{{ $processo }}</option>
                            @endforeach
                        </select>
                    @else
                        <select name="processo_id" class="form-control" id="processo_id" aria-describedby="numero_judicialHelp" placeholder="Processo" disabled="disabled">
                            @foreach ($processos as $key => $processo)
                                @if($processo_id_post == $key)
                                    <option value="{{ $key }}" selected>{{ $processo }}</option>
                                    <input type="hidden" name="processo_id" value="{{$key}}" />
                                @endif
                            @endforeach

                        </select>
                    @endif



                </div>

                <div class="form-group">
                    <label for="tipo_andamento_id">Tipo de Andamento</label>
                    <select name="tipo_andamento_id" class="form-control" id="tipo_andamento_id" aria-describedby="numero_judicialHelp" placeholder="Processo">
                        <option selected="selected" value="">Selecione</option>
                        @foreach ($tipoAndamentos as $key => $andamento)
                            <option value="{{ $key }}" >{{ $andamento }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="Processo">Tipo de Entrada</label>
                    <select name="tipo_entrada_id" class="form-control" id="tipo_entrada_id" aria-describedby="numero_judicialHelp" placeholder="Processo">
                        <option selected="selected" value="">Selecione</option>
                        @foreach ($tipoEntradas as $key => $processo)
                            <option value="{{ $key }}" >{{ $processo }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="Processo">Tipo Prazo</label>
                    <select name="tipo_prazo_id" class="form-control" id="tipo_prazo_id" aria-describedby="numero_judicialHelp" placeholder="tipo_prazo_id">
                        <option selected="selected" value="">Selecione</option>
                        @foreach ($tipoPrazos as $key => $prazo)
                            <option value="{{ $key }}" >{{ $prazo }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="data_prazo">Data Prazo</label>
                    <input  type="date" name="data_prazo" class="form-control" id="data_prazo" placeholder="Data Prazo" >
                </div>

                <div class="form-group">
                    <label for="data_entrega">Data Entrega</label>
                    <input  type="date" name="data_entrega" class="form-control" id="data_entrega" placeholder="Data Entrega" >
                </div>
                <div class="form-group">
                    <label for="data_prazo">Observação</label>
                    <textarea  type="date" name="observacoes" class="form-control" id="observacoes" placeholder="" ></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
