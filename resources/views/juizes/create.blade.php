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

            <a href="{{ route('juizes.create') }}">Procuradoria</a>

            <form action="{{ route('juizes.store') }}" method="POST">
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
                        <label for="nome">Nome</label>
                        <input name="nome" class="form-control" id="nome" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="lotacao_id">Lotação</label>
                        <select name="lotacao_id" class="form-control" id="lotacao_id">
                            <option value="0" selected>Selecione uma Lotação</option>
                            <option value="1">Lotação - sei la qual</option>
                            <option value="2">Lotação - bunda lele</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="tipo_juiz_id">Tipo Juíz</label>
                        <select name="tipo_juiz_id" class="form-control" id="tipo_juiz_id">
                            @foreach ($items as $item)
                                <option value="{{ $item }}" selected>{{ $item }}</option>
                            @endforeach
                        </select>

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