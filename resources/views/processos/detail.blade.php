@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="numero_judicial">Número Judicial</label>
                {{$processo->numero_judicial}}
            </div>
            <div class="form-group col-md-6">
                <label for="numero_alerj">Número Alerj</label>
                {{$processo->numero_alerj}}
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="tribunal_id">Tribunal</label>
                {{$processo->tribunal->nome}}
            </div>
            <div class="form-group col-md-6">
                <label for="vara">Vara</label>
                {{$processo->vara}}
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="data_distribuicao">Data Distribuição</label>
                {{$processo->data_distribuicao}}
            </div>

            <div class="form-group col-md-4">
                <label for="acao_id">Ação</label>
                {{$processo->acao->nome}}
            </div>
            <div class="form-group col-md-4">
                <label for="relator_id">Relator</label>
                {{$processo->relator->name}}
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="juiz_id">Juiz</label>
                {{$processo->juiz->name}}
            </div>

            <div class="form-group col-md-4">
                <label for="autor">Autor</label>
                {{$processo->autor}}
            </div>

            <div class="form-group col-md-4">
                <label for="reu">Réu</label>
                {{$processo->reu}}
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="procurador_id">Procurador</label>
                {{$processo->procurador->name}}
            </div>

            <div class="form-group col-md-3">
                <label for="estagiario_id">Estagiario</label>
                {{$processo->estagiario->name}}
            </div>

            <div class="form-group col-md-3">
                <label for="assessor_id">Assessor</label>
                {{$processo->assessor->name}}
            </div>

            <div class="form-group col-md-3">
                <label for="tipo_meio">Meio</label>
                {{$processo->tipo_meio}}
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="objeto">Objeto</label>
                {{$processo->objeto}}
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="merito">Mérito</label>
                {{$processo->merito}}
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="liminar">Liminar</label>
                {{$processo->liminar}}
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="apensos_obs">Apensos</label>
                {{$processo->apensos_obs}}
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="recurso">Recurso</label>
                {{$processo->recurso}}
            </div>
        </div>

    </div>

@endsection
