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

            <a href="{{ route('processos.create') }}">Procuradoria - Pesquisa</a>

            <form action="{{ route('processos.resultSearch') }}" method="POST">
                {{ csrf_field() }}

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                @if(session()->has('warning'))
                    <div class="alert alert-warning">
                        {{ session()->get('warning') }}
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
                    <div class="form-group col-md-12">
                        <label for="pesquisa">Pesquisa</label>
                        <input name="pesquisa" class="form-control" id="pesquisa" placeholder="Pesquisa">
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <div class="row">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>

                @if (count($processos) > 1)
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Número Judicial</th>
                            <th>Número ALERJ</th>
                            <th>Tribunal</th>
                            <th>Vara</th>
                            <th>Data Distribuição</th>
                            <th>Ação</th>
                            <th>Relator</th>
                            <th>Apensos</th>
                            <th>Juiz</th>
                            <th>Autor</th>
                            <th>Reu</th>
                            <th>Objeto</th>
                            <th>Merito</th>
                            <th>Liminar</th>
                            <th>Recurso</th>
                            <th>Procurador</th>
                            <th>Estagiário</th>
                            <th>Assessor</th>
                            <th>Meio</th>
                        </tr>
                        </thead>
                        @foreach ($processos as $p)
                            <tr>
                                <td>{{ $p->numero_judicial }}</td>
                                <td>{{ $p->numero_alerj }}</td>
                                <td>{{ $p->tribunal_id }}</td>
                                <td>{{ $p->vara }}</td>
                                <td>{{ $p->data_distribuicao }}</td>
                                <td>{{ $p->acao_id }}</td>
                                <td>{{ $p->relator_id }}</td>
                                <td>{{ $p->apensos_obs }}</td>
                                <td>{{ $p->juiz_id }}</td>
                                <td>{{ $p->autor }}</td>
                                <td>{{ $p->reu }}</td>
                                <td>{{ $p->objeto }}</td>
                                <td>{{ $p->merito }}</td>
                                <td>{{ $p->liminar }}</td>
                                <td>{{ $p->recurso }}</td>
                                <td>{{ $p->procurador_id }}</td>
                                <td>{{ $p->estagiario_id }}</td>
                                <td>{{ $p->assessor_id }}</td>
                                <td>{{ $p->tipo_meio }}</td>
                            </tr>
                        @endforeach
                        <tfoot>
                        <tr>
                            <th>Número Judicial</th>
                            <th>Número ALERJ</th>
                            <th>Tribunal</th>
                            <th>Vara</th>
                            <th>Data Distribuição</th>
                            <th>Ação</th>
                            <th>Relator</th>
                            <th>Apensos</th>
                            <th>Juiz</th>
                            <th>Autor</th>
                            <th>Reu</th>
                            <th>Objeto</th>
                            <th>Merito</th>
                            <th>Liminar</th>
                            <th>Recurso</th>
                            <th>Procurador</th>
                            <th>Estagiário</th>
                            <th>Assessor</th>
                            <th>Meio</th>

                        </tr>
                        </tfoot>
                    </table>
                @endif

            </form>
        </div>
    </div>

@endsection
