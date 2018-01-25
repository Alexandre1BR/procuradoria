@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>
                Tribunais - Novo
            </h4>
        </div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('tribunais.store') }}" method="POST">
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
                    <label for="exampleInputEmail1">Nome</label>
                    <input name="nome" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="Nome do tribunal">
                </div>

                @include('partials.save-button')
            </form>
        </div>
    </div>
@endsection
