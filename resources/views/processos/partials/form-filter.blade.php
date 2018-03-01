<form id="processoForm" action="{{ route($isFilter ? 'home.filter' : 'processos.store') }}" method="POST">
    {{ csrf_field() }}

    @if (isset($processo))
        <input v-model="form.id" type="hidden" value="{{ $processo->id }}">
    @endif

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="numero_judicial">Número judicial</label>
                <input value="{{is_null(old('numero_judicial')) ? $processo->numero_judicial : old('numero_judicial')}}"
                       v-model="form.numero_judicial"
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
                <input value="{{is_null(old('numero_alerj')) ? $processo->numero_alerj : old('numero_alerj')}}" v-model="form.numero_alerj" class="form-control" @include('partials.readonly') id="numero_alerj"
                       placeholder="Número Alerj">
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="tribunal_id">Tribunal</label>
                <select2 v-model="form.tribunal_id" :options="tables.tribunais"></select2>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="vara">Vara</label>
                <input value="{{is_null(old('vara'))? $processo->vara : old('vara') }}" v-model="form.vara" class="form-control" @include('partials.readonly') id="vara" placeholder="Digite a Vara">
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="data_distribuicao">Data distribuição</label>
                <input
                    value="{{ is_null(old('data_distribuicao'))? (! is_null($processo->id) ? $processo->data_distribuicao : '' ) :  old('data_distribuicao')}}"
                    type="date"
                    v-model="form.data_distribuicao"
                    class="form-control"
                    id="data_distribuicao" @include('partials.readonly')
                />
                {{--<input value="{{Carbon\Carbon::parse($processo->data_distribuicao)->format('Y-m-d')}}" type="date" v-model="form.data_distribuicao" class="form-control" id="data_distribuicao" @include('partials.readonly') />--}}
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="acao_id">Ação</label>
                <select2 v-model="form.acao_id" :options="tables.acoes"></select2>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="juiz_id">Juiz</label>
                <select2 v-model="form.juiz_id" :options="tables.juizes"></select2>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="autor">Autor</label>
                <input value="{{is_null(old('autor')) ? $processo->autor : old('autor')}}" v-model="form.autor" type="text" class="form-control" @include('partials.readonly') id="autor"
                       placeholder="Informe o Autor">
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="relator_id">Relator</label>
                <select2 v-model="form.relator_id" :options="tables.juizes"></select2>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="reu">Réu</label>
                <input value="{{is_null(old('reu')) ? $processo->reu : old('reu')}}" v-model="form.reu" type="text" class="form-control" @include('partials.readonly') id="reu" placeholder="Informe o Réu">
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="procurador_id">Procurador</label>
                <select2 v-model="form.procurador_id" :options="tables.procuradores"></select2>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="assessor_id">Assessor</label>
                <select2 v-model="form.assessor_id" :options="tables.assessores"></select2>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="estagiario_id">Estagiário</label>
                <select2 v-model="form.estagiario_id" :options="tables.estagiarios"></select2>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label for="tipo_meio">Meio</label>
                <select2 v-model="form.meio_id" :options="tables.meios"></select2>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="objeto">Objeto</label>
                <textarea v-model="form.objeto" class="form-control" @include('partials.readonly')
                        id="objeto" placeholder="Informe o Objeto">{{is_null(old('objeto'))? $processo->objeto : old('objeto')}}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="merito">Mérito</label>
                <textarea v-model="form.merito" class="form-control" @include('partials.readonly')
                        id="merito" placeholder="Informe o Mérito">{{is_null(old('merito'))? $processo->merito : old('merito')}}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="liminar">Liminar</label>
                <textarea v-model="form.liminar" class="form-control" @include('partials.readonly') id="liminar"
                          placeholder="Informe o Liminar">{{is_null(old('liminar'))? $processo->liminar : old('liminar')}}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="apensos_obs">Apensos</label>
                <textarea v-model="form.apensos_obs" class="form-control" @include('partials.readonly') id="apensos_obs"
                          placeholder="Informe os Apensos">{{is_null(old('apensos_obs'))? $processo->apensos_obs : old('apensos_obs')}}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="recurso">Recurso</label>
                <textarea v-model="form.recurso" class="form-control" @include('partials.readonly') id="recurso"
                          placeholder="Informe o Recurso">{{is_null(old('recurso'))? $processo->recurso : old('recurso')}}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="observacao">Observação</label>
                <textarea v-model="form.observacao" class="form-control" @include('partials.readonly') id="observacao"
                          placeholder="Caso deseje, entre com uma observação">{{is_null(old('observacao'))? $processo->observacao : old('observacao')}}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="link">Link</label>
                <textarea v-model="form.link" class="form-control" @include('partials.readonly') id="link"
                          placeholder="Informe o link do processo">{{is_null(old('link'))? $processo->link : old('link')}}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <hr/>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="data_arquivamento">Data do arquivamento</label>
                <input
                        value="{{ is_null(old('data_arquivamento')) ? ! is_null($processo->id) ? $processo->data_arquivamento : '' : old('data_arquivamento')}}"
                        type="date"
                        v-model="form.data_arquivamento"
                        class="form-control"
                        id="data_arquivamento" @include('partials.readonly')
                />
                {{--<input value="{{Carbon\Carbon::parse($processo->data_arquivamento)->format('Y-m-d')}}" type="date" v-model="form.data_arquivamento" class="form-control" id="data_arquivamento" @include('partials.readonly') />--}}
            </div>
        </div>

        <div class="col-md-8">
            <div class="form-group">
                <label for="observacao_arquivamento">Observação do arquivamento</label>
                <textarea v-model="form.observacao_arquivamento" class="form-control" @include('partials.readonly') id="observacao_arquivamento"
                          placeholder="Caso deseje, entre com uma observação sobre o arquivamento">{{is_null(old('observacao_arquivamento'))? $processo->observacao_arquivamento : old('observacao_arquivamento')}}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <hr/>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="tags">Tags</label>
                <select2 v-model="form.tags" :options="tables.tags" multiple></select2>
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