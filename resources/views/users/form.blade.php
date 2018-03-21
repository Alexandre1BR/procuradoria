@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-8 col-md-10">
                    <h4>
                        <a href="{{ route('users.index') }}">Users</a>

                        @if(is_null($user->id))
                            > NOVO
                        @else
                            > {{ $user->name }}
                        @endif
                    </h4>
                </div>

                <div class="col-xs-4 col-md-2">
                    @include('partials.save-button')
                    @include('partials.edit-button', ['model' => $user])
                </div>
            </div>
        </div>

        <div class="panel-body">
            @include('partials.alerts')

            <form name="formulario" id="formulario" action="{{ route('users.store') }}" method="POST">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{$user->id}}"/>
                {{--<input name="disabled_by_id" value="{{$user->disabled_by_id}}"/>--}}
                {{--<input name="password" value="{{$user->password}}"/>--}}
                {{--<input name="remember_token" value="{{$user->remember_token}}"/>--}}


                <div class="row">
                    <div class="form-group col-md-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="User">Login ALERJ</label>
                                <p><label name="email">{{$user->email}}</label></p>
                                <input type="hidden" name="username" id="username" value="{{$user->username}}" />
                                <input type="hidden" name="email" id="email" value="{{$user->email}}" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="User">Nome</label>
                                <p><label name="name">{{$user->name}}</label></p>
                                <input type="hidden" name="name" id="name" value="{{$user->name}}" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="User">Tipo de usuário</label>
                                <p><label name="user_type_id">{{$user->userType->nome}}</label></p>
                                <input type="hidden" name="user_type_id" id="user_type_id" value="{{$user->userType->id}}" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="User">Email pessoal</label>
                                <input name="personal_email" value="{{$user->personal_email}}" @include('partials.readonly') class="form-control" id="personal_email" aria-describedby="nomeHelp" placeholder="email pessoal">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="no_notifications" id="no_notifications" type="checkbox" value="1" disabled
                                       @if($user->no_notifications)
                                            checked
                                    @endif
                                >
                                <label for="no_notifications">Não deseja receber notificações</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="all_notifications" id="all_notifications" type="checkbox" value="1" disabled
                                       @if($user->all_notifications)
                                            checked
                                        @endif
                                >
                                <label for="all_notifications">Deseja receber TODAS as notificações</label>
                            </div>
                        </div>

                    </div>
                </div>

                @include('partials.save-button')
            </form>
        </div>
    </div>
@endsection
