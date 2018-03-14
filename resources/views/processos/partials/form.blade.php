<form name="formulario" id="formulario" action="{{ route($isFilter ? 'home.filter' : 'processos.store') }}" method="POST">
    {{ csrf_field() }}

    @if (isset($processo))
        <input name="id" type="hidden" value="{{ $processo->id }}">
    @endif

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="data_recebimento">Data Recebimento</label>
                <input
                        value="{{ is_null(old('data_recebimento'))? (! is_null($processo->id) ? $processo->data_recebimento : '' ) :  old('data_recebimento')}}"
                        type="date"
                        name="data_recebimento"
                        class="form-control"
                        id="data_recebimento" @include('partials.readonly')
                />

            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="data_distribuicao">Data distribuição</label>
                <input
                        value="{{ is_null(old('data_distribuicao'))? (! is_null($processo->id) ? $processo->data_distribuicao : '' ) :  old('data_distribuicao')}}"
                        type="date"
                        name="data_distribuicao"
                        class="form-control"
                        id="data_distribuicao" @include('partials.readonly')
                />
                {{--<input value="{{Carbon\Carbon::parse($processo->data_distribuicao)->format('Y-m-d')}}" type="date" name="data_distribuicao" class="form-control" id="data_distribuicao" @include('partials.readonly') />--}}
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="numero_judicial">Número judicial</label>
                <input value="{{is_null(old('numero_judicial')) ? $processo->numero_judicial : old('numero_judicial')}}"
                       name="numero_judicial"
                       class="form-control"
                       @include('partials.readonly')
                       id="numero_judicial"
                       placeholder="Número Judicial"
                >
            </div>
        </div>



        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="numero_alerj">Número ALERJ</label>
                <input value="{{is_null(old('numero_alerj')) ? $processo->numero_alerj : old('numero_alerj')}}" name="numero_alerj" class="form-control" @include('partials.readonly') id="numero_alerj"
                       placeholder="Número Alerj">
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="tribunal_id">Tribunal</label>
                <select name="tribunal_id" class="form-control select2" id="tribunal_id" @include('partials.disabled')>
                    <option value="">SELECIONE</option>
                    @foreach ($tribunais as $key => $tribunal)
                        @if(((!is_null($processo->id)) && (!is_null($processo->tribunal) && $processo->tribunal->id === $key) || (!is_null(old('tribunal_id'))) && old('tribunal_id') == $key))
                            <option value="{{ $key }}" selected="selected">{{ $tribunal }}</option>
                        @else
                            <option value="{{ $key }}">{{ $tribunal }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="vara">Vara</label>
                <input value="{{is_null(old('vara'))? $processo->vara : old('vara') }}" name="vara" class="form-control" @include('partials.readonly') id="vara" placeholder="Digite a Vara">
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="acao_id">Ação</label>
                <select name="acao_id" class="form-control select2" @include('partials.disabled') id="acao_id">
                    <option value="">SELECIONE</option>
                    @foreach ($acoes as $key => $acao)
                        <option value="{{ $key }}">{{ $acao }}</option>
                        @if((!is_null($processo->acao)) && $processo->acao->id == $key
                        || (!is_null(old('acao_id'))) && old('acao_id') == $key))
                        <option value="{{ $key }}" selected="selected">{{ $acao }}</option>
                        @else
                            <option value="{{ $key }}">{{ $acao }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="tipo_processo_id">Tipo Processo</label>
                <select name="tipo_processo_id" class="form-control select2" @include('partials.disabled') id="tipo_processo_id">
                    <option value="">SELECIONE</option>
                    @foreach ($tiposProcessos as $key => $tipo_processo)
                        {{-- Seleciona o valor "ALERJ" como default quando se está criando um processo novo --}}
                        @if(is_null($processo->tipoProcesso) && $tipo_processo->id == 1 && is_null($processo->id))
                            <option value="{{ $tipo_processo->id }}" selected="selected">{{ $tipo_processo->nome }}</option>
                        {{-- Seleciona o valor anteriormente escolhido ou anteriormente salvo --}}
                        @elseif((!is_null($processo->tipoProcesso)) && $processo->tipoProcesso->id == $tipo_processo->id
                        || (!is_null(old('tipo_processo_id'))) && old('tipo_processo_id') == $tipo_processo->id))
                            <option value="{{ $tipo_processo->id }}" selected="selected">{{ $tipo_processo->nome }}</option>
                        {{-- Outros Cenários --}}
                        @else
                            <option value="{{ $tipo_processo->id }}">{{ $tipo_processo->nome }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="juiz_id">Juiz</label>
                <select name="juiz_id" class="form-control select2" @include('partials.disabled') id="juiz_id">
                    <option value="">SELECIONE</option>
                    @foreach ($juizes as $key => $juiz)
                        @if((!is_null($processo->juiz)) && $processo->juiz->id == $juiz->id
                        || (!is_null(old('juiz_id'))) && old('juiz_id') == $juiz->id))
                        <option value="{{ $juiz->id }}" selected="selected">{{ $juiz->nome . " (". $juiz->tipoJuiz->abreviacao .") - ". $juiz->lotacao->abreviacao }}</option>
                        @else
                            <option value="{{ $juiz->id }}">{{ $juiz->nome . " (". $juiz->tipoJuiz->abreviacao .") - ". $juiz->lotacao->abreviacao }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="autor">Autor</label>
                <input value="{{is_null(old('autor')) ? $processo->autor : old('autor')}}" name="autor" type="text" class="form-control" @include('partials.readonly') id="autor"
                       placeholder="Informe o Autor">
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="relator_id">Relator</label>
                <select name="relator_id" class="form-control select2" @include('partials.disabled') id="relator_id">
                    <option value="">SELECIONE</option>
                    @foreach ($juizes as $key => $relator)
                        @if((!is_null($processo->relator)) && $processo->relator->id == $relator->id
                        || (!is_null(old('relator_id'))) && old('relator_id') == $relator->id))
                        <option value="{{ $relator->id }}" selected="selected">{{ $relator->nome . " (". $relator->tipoJuiz->abreviacao .") - ". $relator->lotacao->abreviacao }}</option>
                        @else
                            <option value="{{ $relator->id }}">{{ $relator->nome . " (". $relator->tipoJuiz->abreviacao .") - ". $relator->lotacao->abreviacao }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="reu">Réu</label>
                <input value="{{is_null(old('reu')) ? $processo->reu : old('reu')}}" name="reu" type="text" class="form-control" @include('partials.readonly') id="reu" placeholder="Informe o Réu">
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="procurador_id">Procurador</label>
                <select name="procurador_id" class="form-control select2" @include('partials.disabled') id="procurador_id">
                    <option value="">SELECIONE</option>
                    @foreach ($procuradores as $key => $procurador)
                        @if((!is_null($processo->procurador)) && $processo->procurador->id == $key
                        || (!is_null(old('procurador_id'))) && old('procurador_id') == $key))
                        <option value="{{ $key }}" selected="selected">{{ $procurador }}</option>
                        @else
                            <option value="{{ $key }}">{{ $procurador }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="estagiario_id">Estagiário</label>
                <select name="estagiario_id" class="form-control select2" @include('partials.disabled') id="estagiario_id">
                    <option value="">SELECIONE</option>
                    @foreach ($estagiarios as $key => $estagiario)
                        @if((!is_null($processo->estagiario)) && $processo->estagiario->id == $key
                        || (!is_null(old('estagiario_id'))) && old('estagiario_id') == $key))

                        <option value="{{ $key }}" selected="selected">{{ $estagiario }}</option>
                        @else
                            <option value="{{ $key }}">{{ $estagiario }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="assessor_id">Assessor</label>
                <select name="assessor_id" class="form-control select2" @include('partials.disabled') id="assessor_id">
                    <option value="">SELECIONE</option>
                    @foreach ($assessores as $key => $assessor)
                        @if((!is_null($processo->assessor)) && $processo->assessor->id == $key
                        || (!is_null(old('assessor_id'))) && old('assessor_id') == $key))
                        <option value="{{ $key }}" selected="selected">{{ $assessor }}</option>
                        @else
                            <option value="{{ $key }}">{{ $assessor }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="tipo_meio">Meio</label>
                <select name="tipo_meio_id" class="form-control select2" @include('partials.disabled') id="tipo_meio">
                    <option value="">SELECIONE</option>
                    @foreach ($meios as $key => $meio)
                        {{$key}}
                        {{-- Seleciona o valor "ALERJ" como default quando se está criando um processo novo --}}
                        @if(is_null($processo->tipoMeio) && $key == 3 && is_null($processo->id))
                            <option value="{{ $key }}" selected="selected">{{ $meio }}</option>
                        @elseif((!is_null($processo->id)) && $processo->tipoMeio->id == $key
                        || (!is_null(old('tipo_meio_id'))) && old('tipo_meio_id') == $key))
                        <option value="{{ $key }}" selected="selected">{{ $meio }}</option>
                        @else
                            <option value="{{ $key }}">{{ $meio }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="objeto">Objeto</label>
                <textarea name="objeto" class="form-control" @include('partials.readonly')
                id="objeto" placeholder="Informe o Objeto">{{is_null(old('objeto'))? $processo->objeto : old('objeto')}}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="merito">Mérito</label>
                <textarea name="merito" class="form-control" @include('partials.readonly')
                id="merito" placeholder="Informe o Mérito">{{is_null(old('merito'))? $processo->merito : old('merito')}}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="liminar">Liminar</label>
                <textarea name="liminar" class="form-control" @include('partials.readonly') id="liminar"
                          placeholder="Informe o Liminar">{{is_null(old('liminar'))? $processo->liminar : old('liminar')}}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="apensos_obs">Apensos</label>
                <textarea name="apensos_obs" class="form-control" @include('partials.readonly') id="apensos_obs"
                          placeholder="Informe os Apensos">{{is_null(old('apensos_obs'))? $processo->apensos_obs : old('apensos_obs')}}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="recurso">Recurso</label>
                <textarea name="recurso" class="form-control" @include('partials.readonly') id="recurso"
                          placeholder="Informe o Recurso">{{is_null(old('recurso'))? $processo->recurso : old('recurso')}}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="observacao">Observação</label>
                <textarea name="observacao" class="form-control" @include('partials.readonly') id="observacao"
                          placeholder="Caso deseje, entre com uma observação">{{is_null(old('observacao'))? $processo->observacao : old('observacao')}}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="link">Link</label>
                <textarea name="link" class="form-control" @include('partials.readonly') id="link"
                          placeholder="Informe o link do processo">{{is_null(old('link'))? $processo->link : old('link')}}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <hr/>
        </div>
        @if(isset($processo) && !is_null($processo->id))
            <div class="col-md-4">
                <div class="form-group">
                    <label for="data_arquivamento">Data do arquivamento</label>
                    <input
                            value="{{ is_null(old('data_arquivamento')) ? ! is_null($processo->id) ? $processo->data_arquivamento : '' : old('data_arquivamento')}}"
                            type="date"
                            name="data_arquivamento"
                            class="form-control"
                            id="data_arquivamento" @include('partials.readonly')
                    />
                    {{--<input value="{{Carbon\Carbon::parse($processo->data_arquivamento)->format('Y-m-d')}}" type="date" name="data_arquivamento" class="form-control" id="data_arquivamento" @include('partials.readonly') />--}}
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <label for="observacao_arquivamento">Observação do arquivamento</label>
                    <textarea name="observacao_arquivamento" class="form-control" @include('partials.readonly') id="observacao_arquivamento"
                              placeholder="Caso deseje, entre com uma observação sobre o arquivamento">{{is_null(old('observacao_arquivamento'))? $processo->observacao_arquivamento : old('observacao_arquivamento')}}</textarea>
                </div>
            </div>

            <div class="col-md-12">
                <hr/>
            </div>
        @endif
        <div class="col-md-12">
            <div class="form-group">
                <label for="tags">Tags</label>
                <select name="tags[]" class="form-control select2" multiple="multiple" id="tags" @include('partials.disabled')>
                    @foreach ($tags as $tag)
                        <option {{ isset($processo) && $processo->tags->contains('name', $tag->name) ? 'selected="selected"' : '' }}>{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <hr/>
        </div>
    </div>

    @include('partials.save-button')
</form>
