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
                        <div class="form-group col-md-4">
                            <label for="numero_judicial">Número Judicial</label>
                            <input name="numero_judicial" class="form-control" id="numero_judicial" placeholder="Número Judicial">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="numero_alerj">Número Alerj</label>
                            <input name="numero_alerj" class="form-control" id="numero_alerj" placeholder="Número Alerj">
                        </div>
                    </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="tribunal_id">Tribunal</label>
                        <select name="tribunal_id" class="form-control" id="tribunal_id">
                            <option value="0" selected>Selecione um Tribunal</option>
                            <option value="1">Origem - sei la qual</option>
                            <option value="2">Origem - bunda lele</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="vara">Origem</label>
                        <input name="vara" class="form-control" id="vara" placeholder="Digite a Vara">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="dataDistribuicao">Data Distribuição</label>
                        <input type="date" class="form-control" id="dataDistribuicao">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="acaoId">Ação Id</label>
                        <input type="text" class="form-control" id="acaoId" placeholder="Informe o Ação Id">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="relatorId">Relator Id</label>
                        <input type="text" class="form-control" id="relatorId" placeholder="Informe o Relator Id">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="apensosObs">Apensos Obs</label>
                        <input type="text" class="form-control" id="apensosObs" placeholder="Informe os Apensos (obs)">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="juizId">Juiz Id</label>
                        <input type="text" class="form-control" id="juizId" placeholder="Informe o Juiz Id">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Autor">Autor</label>
                        <input type="text" class="form-control" id="Autor" placeholder="Informe o Autor">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Reu">Réu</label>
                        <input type="text" class="form-control" id="Reu" placeholder="Informe o Réu">
                    </div>
                </div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

        </div>


        </form>
        </div>
    </div>
@endsection

{{--


data_distribuicao
acao_id
relator_d
apensos (obs)
juiz_id
autor
reu
objeto (memo)
merito (memo)
liminar
recurso (vamos cadastrar outros processos?)
procurador_id
estagiario_id
assessor_id
tipo_meio
--}}
