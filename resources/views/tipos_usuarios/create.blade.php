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

            <a href="{{ route('tipos_usuarios.create') }}">Procuradoria → Tipos de usuários</a>

            <form action="{{ route('tipos_usuarios.store') }}" method="POST">
                {{ csrf_field() }}

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="nome">Nome</label>
                            <input name="nome" class="form-control" id="nome" placeholder="Nome">
                        </div>
                    </div>
                <div class="row">
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
