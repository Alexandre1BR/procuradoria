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

<div v-if="refreshing">
    <div class="text-right">
        <p class="text-danger">carregando...</p>
    </div>
</div>

<div v-if="!refreshing">
    <div class="text-right">
        <p class="text-danger">Total de Processos encontrados: {{ $processos_info_paginacao->total() }}</p>
    </div>
</div>

<div class="hidden-lg">
    <div class="row">
        <div class="col-xs-12" v-for="processo in tables.processos" @click="openProcesso(processo.id)">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">judicial: <strong><text-highlight :queries="makeSearchedWord()">@{{ processo.numero_judicial }}</text-highlight></strong></h4>
                    <h4 class="panel-title">alerj: <strong><text-highlight :queries="makeSearchedWord()">@{{ processo.numero_alerj }}</text-highlight></strong></h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-3 text-right">
                            Tribunal
                        </div>
                        <div class="col-xs-9">
                            <strong><text-highlight :queries="makeSearchedWord()">@{{ processo.tribunal_abreviacao }}</text-highlight></strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-3 text-right">
                            Ação
                        </div>
                        <div class="col-xs-9">
                            <strong><text-highlight :queries="makeSearchedWord()">@{{ processo.acao_abreviacao }}</text-highlight></strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-3 text-right">
                            Autor
                        </div>
                        <div class="col-xs-9">
                            <strong><text-highlight :queries="makeSearchedWord()">@{{ processo.autor }}</text-highlight></strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-3 text-right">
                            Objeto
                        </div>
                        <div class="col-xs-9">
                            <strong><text-highlight :queries="makeSearchedWord()">@{{ processo.objeto }}</text-highlight></strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-3 text-right">
                            Procurador
                        </div>
                        <div class="col-xs-9">
                            <strong><text-highlight :queries="makeSearchedWord()">@{{ processo.procurador_nome }}</text-highlight></strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-3 text-right">
                            Assessor
                        </div>
                        <div class="col-xs-9">
                            <strong><text-highlight :queries="makeSearchedWord()">@{{ processo.assessor_nome }}</text-highlight></strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-3 text-right">
                            Estagiário
                        </div>
                        <div class="col-xs-9">
                            <strong><text-highlight :queries="makeSearchedWord()">@{{ processo.estagiario_nome }}</text-highlight></strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<table id="example" class="table table-striped table-bordered visible-lg" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Link</th>
            <th>Número judicial</th>
            <th>Número ALERJ</th>
            <th>Tribunal</th>
            <th>Distribuído em</th>
            <th>Ação</th>
            <th class="hidden-xs">Autor</th>
            <th class="hidden-xs">Objeto</th>
            <th class="hidden-xs">Procurador</th>
            <th class="hidden-xs">Assessor</th>
            <th class="hidden-xs">Estagiário</th>
        </tr>
    </thead>

    <tbody>
        <tr v-if="tables.processos" v-for="processo in tables.processos">
            <td>
                <a class="btn btn-success" v-if="processo.link" :href="processo.link" target="_blank">
                    <i class="fa fa-external-link-square"></i>
                </a>
            </td>
            <td width="15%">
                <a :href="processo.show_url"><text-highlight :queries="makeSearchedWord()">@{{ processo.numero_judicial }}</text-highlight></a>
            </td>
            <td width="10%"><text-highlight :queries="makeSearchedWord()">@{{ processo.numero_alerj }}</text-highlight></td>
            <td width="5%"><text-highlight :queries="makeSearchedWord()">@{{ processo.tribunal_abreviacao }}</text-highlight></td>
            <td width="6%"><text-highlight :queries="makeSearchedWord()">@{{ processo.data_distribuicao_formatado }}</text-highlight></td>
            <td width="4%"><text-highlight :queries="makeSearchedWord()">@{{ processo.acao_abreviacao }}</text-highlight></td>
            <td width="15%"><text-highlight :queries="makeSearchedWord()">@{{ processo.autor }}</text-highlight></td>
            <td width="15%"><text-highlight :queries="makeSearchedWord()">@{{ processo.objeto }}</text-highlight></td>
            <td width="10%"><text-highlight :queries="makeSearchedWord()">@{{ processo.procurador_nome }}</text-highlight></td>
            <td width="10%"><text-highlight :queries="makeSearchedWord()">@{{ processo.assessor_nome }}</text-highlight></td>
            <td width="10%"><text-highlight :queries="makeSearchedWord()">@{{ processo.estagiario_nome }}</text-highlight></td>
        </tr>

        <tr v-if="!tables.processos" v-for="processo in tables.processos">
            <td colspan="10" class="text-center">
                <h3>Nenhum processo encontrado</h3>
            </td>
        </tr>
    </tbody>
    {{ $processos_info_paginacao }}
</table>