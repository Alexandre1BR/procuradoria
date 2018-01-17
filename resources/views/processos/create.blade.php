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

            <a href="{{ route('home') }}">Procuradoria</a>

            <form action="{{ route('processos.store') }}" method="POST">
                {{ csrf_field() }}

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

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
                    <div class="form-group col-md-6">
                        <label for="numero_judicial">Número Judicial</label>
                        <input name="numero_judicial" class="form-control" id="numero_judicial" placeholder="Número Judicial">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="numero_alerj">Número Alerj</label>
                        <input name="numero_alerj" class="form-control" id="numero_alerj" placeholder="Número Alerj">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="tribunal_id">Tribunal</label>
                        <select name="tribunal_id" class="form-control" id="tribunal_id">
                            @foreach ($tribunais as $key => $tribunal)
                                <option value="{{ $key }}" selected>{{ $tribunal }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="vara">Vara</label>
                        <input name="vara" class="form-control" id="vara" placeholder="Digite a Vara">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="data_distribuicao">Data Distribuição</label>
                        <input name="data_distribuicao" type="date" class="form-control" id="data_distribuicao">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="procurador_id">Ação</label>
                        <select name="acao_id" class="form-control" id="procurador_id">
                            @foreach ($acoes as $key => $acao)
                                <option value="{{ $key }}" selected>{{ $acao }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="relator_id">Relator</label>
                        <select name="relator_id" class="form-control" id="relator_id">
                            @foreach ($juizes as $key => $juiz)
                                <option value="{{ $key }}" selected>{{ $juiz }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="juiz_id">Juiz</label>
                        <select name="juiz_id" class="form-control" id="relator_id">
                            @foreach ($juizes as $key => $juiz)
                                <option value="{{ $key }}" selected>{{ $juiz }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="autor">Autor</label>
                        <input name="autor" type="text" class="form-control" id="autor" placeholder="Informe o Autor">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="reu">Réu</label>
                        <input name="reu" type="text" class="form-control" id="reu" placeholder="Informe o Réu">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="procurador_id">Procurador</label>
                        <select name="procurador_id" class="form-control" id="procurador_id">
                            @foreach ($usuarios as $key => $usuario)
                                <option value="{{ $key }}" selected>{{ $usuario }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="estagiario_id">Estagiario</label>
                        <select name="estagiario_id" class="form-control" id="estagiario_id">
                            @foreach ($usuarios as $key => $usuario)
                                <option value="{{ $key }}" selected>{{ $usuario }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="assessor_id">Assessor</label>
                        <select name="assessor_id" class="form-control" id="assessor_id">
                            @foreach ($usuarios as $key => $usuario)
                                <option value="{{ $key }}" selected>{{ $usuario }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="tipo_meio">Meio</label>
                        <select name="tipo_meio" class="form-control" id="tipo_meio">
                            @foreach ($meios as $key => $meio)
                                <option value="{{ $key }}" selected>{{ $meio }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="objeto">Objeto</label>
                        <textarea name="objeto" class="form-control" id="objeto" placeholder="Informe o Objeto"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="merito">Mérito</label>
                        <textarea name="merito" class="form-control" id="merito" placeholder="Informe o Mérito"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="liminar">Liminar</label>
                        <textarea name="liminar" class="form-control" id="liminar" placeholder="Informe o Liminar"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="apensos_obs">Apensos</label>
                        <textarea name="apensos_obs" class="form-control" id="apensos_obs" placeholder="Informe os Apensos"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="recurso">Recurso</label>
                        <textarea name="recurso" class="form-control" id="recurso" placeholder="Informe o Recurso"></textarea>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <div class="row">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
