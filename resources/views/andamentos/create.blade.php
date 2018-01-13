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
                    <select name="processo_id" class="form-control" id="processo_id" aria-describedby="numero_judicialHelp" placeholder="Processo">
                        <option>111</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Processo">Tipo Prazo</label>
                    <select name="tipo_prazo_id" class="form-control" id="tipo_prazo_id" aria-describedby="numero_judicialHelp" placeholder="tipo_prazo_id">
                        <option value="111">111</option>
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


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
