<form action="{{ route($isFilter ? 'home.filter' : 'processos.store') }}" method="POST">
    {{ csrf_field() }}

    @if (isset($processo))
        <input name="id" type="hidden" value="{{$processo->id}}">
    @endif

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
        <div class="col-md-6">
            <div class="form-group">
                <label for="numero_judicial">Número Judicial</label>
                <input value="{{$processo->numero_judicial}}"
                       name="numero_judicial"
                       class="form-control"
                       @include('partials.readonly')
                       id="numero_judicial"
                       placeholder="Número Judicial"
                >
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="numero_alerj">Número Alerj</label>
                <input value="{{$processo->numero_alerj}}" name="numero_alerj" class="form-control" @include('partials.readonly') id="numero_alerj"
                       placeholder="Número Alerj">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="tribunal_id">Tribunal</label>
                <select name="tribunal_id" class="js-example-basic-single form-control" @include('partials.disabled') id="tribunal_id">
                    <option value="">SELECIONE</option>
                    @foreach ($tribunais as $key => $tribunal)
                        @if(! is_null($processo->id) && $processo->tribunal->id === $key)
                            <option value="{{ $key }}" selected="selected">{{ $tribunal }}</option>
                        @else
                            <option value="{{ $key }}">{{ $tribunal }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="vara">Vara</label>
                <input value="{{$processo->vara}}" name="vara" class="form-control" @include('partials.readonly') id="vara" placeholder="Digite a Vara">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="data_distribuicao">Data Distribuição</label>
                <input
                        value="{{ ! is_null($processo->id) ? $processo->data_distribuicao : '' }}"
                        type="date"
                        name="data_distribuicao"
                        class="form-control"
                        id="data_distribuicao" @include('partials.readonly')
                />
                {{--<input value="{{Carbon\Carbon::parse($processo->data_distribuicao)->format('Y-m-d')}}" type="date" name="data_distribuicao" class="form-control" id="data_distribuicao" @include('partials.readonly') />--}}
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="acao_id">Ação</label>
                <select name="acao_id" class="js-example-basic-single form-control" @include('partials.disabled') id="acao_id">
                    <option value="">SELECIONE</option>
                    @foreach ($acoes as $key => $acao)
                        <option value="{{ $key }}">{{ $acao }}</option>
                        @if(! is_null($processo->id) && $processo->acao->id == $key)
                            <option value="{{ $key }}" selected="selected">{{ $acao }}</option>
                        @else
                            <option value="{{ $key }}">{{ $acao }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="relator_id">Relator</label>
                <select name="relator_id" class="js-example-basic-single form-control" @include('partials.disabled') id="relator_id">
                    <option value="">SELECIONE</option>
                    @foreach ($juizes as $key => $relator)
                        @if(! is_null($processo->id) && $processo->relator->id == $key)
                            <option value="{{ $key }}" selected="selected">{{ $relator }}</option>
                        @else
                            <option value="{{ $key }}">{{ $relator }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="juiz_id">Juiz</label>
                <select name="juiz_id" class="js-example-basic-single form-control" @include('partials.disabled') id="juiz_id">
                    <option value="">SELECIONE</option>
                    @foreach ($juizes as $key => $juiz)
                        @if(! is_null($processo->juiz) && $processo->juiz->id == $key)
                            <option value="{{ $key }}" selected="selected">{{ $juiz }}</option>
                        @else
                            <option value="{{ $key }}">{{ $juiz }}</option>
                        @endif
                    @endforeach

                </select>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="autor">Autor</label>
                <input value="{{$processo->autor}}" name="autor" type="text" class="form-control" @include('partials.readonly') id="autor"
                       placeholder="Informe o Autor">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="reu">Réu</label>
                <input value="{{$processo->reu}}" name="reu" type="text" class="form-control" @include('partials.readonly') id="reu" placeholder="Informe o Réu">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="procurador_id">Procurador</label>
                <select name="procurador_id" class="js-example-basic-single form-control" @include('partials.disabled') id="procurador_id">
                    <option value="">SELECIONE</option>
                    @foreach ($usuarios as $key => $procurador)
                        @if(!is_null($processo->procurador) && $processo->procurador->id == $key)
                            <option value="{{ $key }}" selected="selected">{{ $procurador }}</option>
                            {{--@else--}}
                            {{--@if($processo->procurador->id == $key)--}}
                            {{--<option value="{{ $key }}" selected="selected">{{ $procurador }}</option>--}}
                        @else
                            <option value="{{ $key }}">{{ $procurador }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="estagiario_id">Estagiario</label>
                <select name="estagiario_id" class="js-example-basic-single form-control" @include('partials.disabled') id="estagiario_id">
                    <option value="">SELECIONE</option>
                    @foreach ($usuarios as $key => $estagiario)
                        @if(! is_null($processo->estagiario) && $processo->estagiario->id == $key)
                            <option value="{{ $key }}" selected="selected">{{ $estagiario }}</option>
                        @else
                            {{--@if($processo->estagiario->id == $key)--}}
                            {{--<option value="{{ $key }}" selected="selected">{{ $estagiario }}</option>--}}
                            {{--@else--}}
                            <option value="{{ $key }}">{{ $estagiario }}</option>
                        @endif
                        {{--@endif--}}
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="assessor_id">Assessor</label>
                <select name="assessor_id" class="js-example-basic-single form-control" @include('partials.disabled') id="assessor_id">
                    <option value="">SELECIONE</option>
                    @foreach ($usuarios as $key => $assessor)
                        @if(! is_null($processo->$assessor) && $processo->assessor->id == $key)
                            <option value="{{ $key }}" selected="selected">{{ $assessor }}</option>
                        @else
                            {{--@if($processo->assessor->id == $key)--}}
                            {{--<option value="{{ $key }}" selected="selected">{{ $assessor }}</option>--}}
                            {{--@else--}}
                            <option value="{{ $key }}">{{ $assessor }}</option>
                        @endif
                        {{--@endif--}}
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="tipo_meio">Meio</label>
                <select name="tipo_meio_id" class="js-example-basic-single form-control" @include('partials.disabled') id="tipo_meio">
                    <option value="">SELECIONE</option>
                    @foreach ($meios as $key => $meio)
                        @if(! is_null($processo->id) && $processo->tipoMeio->id == $key)
                            <option value="{{ $key }}" selected="selected">{{ $meio }}</option>
                        @else
                            <option value="{{ $key }}">{{ $meio }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="objeto">Objeto</label>
                <textarea name="objeto" class="form-control" @include('partials.readonly') id="objeto" placeholder="Informe o Objeto">{{$processo->objeto}}</textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="merito">Mérito</label>
                <textarea name="merito" class="form-control" @include('partials.readonly') id="merito" placeholder="Informe o Mérito">{{$processo->merito}}</textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="liminar">Liminar</label>
                <textarea name="liminar" class="form-control" @include('partials.readonly') id="liminar"
                          placeholder="Informe o Liminar">{{$processo->liminar}}</textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="apensos_obs">Apensos</label>
                <textarea name="apensos_obs" class="form-control" @include('partials.readonly') id="apensos_obs"
                          placeholder="Informe os Apensos">{{$processo->apensos_obs}}</textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="recurso">Recurso</label>
                <textarea name="recurso" class="form-control" @include('partials.readonly') id="recurso"
                          placeholder="Informe o Recurso">{{$processo->recurso}}</textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="observacao">Observação</label>
                <textarea name="observacao" class="form-control" @include('partials.readonly') id="observacao"
                          placeholder="Caso deseje, entre com uma observação">{{$processo->observacao}}</textarea>
            </div>
        </div>
    </div>


    @include('partials.save-button')
</form>
