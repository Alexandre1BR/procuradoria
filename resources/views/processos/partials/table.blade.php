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

<div class="hidden-lg">
    <div class="row">
        <div class="col-xs-12" v-for="processo in tables.processos" @click="openProcesso(processo.id)">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">judicial: <strong>@{{ processo.numero_judicial }}</strong></h4>
                    <h4 class="panel-title">alerj: <strong>@{{ processo.numero_alerj }}</strong></h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-3 text-right">
                            Tribunal
                        </div>
                        <div class="col-xs-9">
                            <strong>@{{ processo.tribunal_nome }}</strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-3 text-right">
                            Ação
                        </div>
                        <div class="col-xs-9">
                            <strong>@{{ processo.acao_nome }}</strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-3 text-right">
                            Autor
                        </div>
                        <div class="col-xs-9">
                            <strong>@{{ processo.autor }}</strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-3 text-right">
                            Objeto
                        </div>
                        <div class="col-xs-9">
                            <strong>@{{ processo.objeto }}</strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-3 text-right">
                            Procurador
                        </div>
                        <div class="col-xs-9">
                            <strong>@{{ processo.procurador_nome }}</strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-3 text-right">
                            Assessor
                        </div>
                        <div class="col-xs-9">
                            <strong>@{{ processo.assessor_nome }}</strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-3 text-right">
                            Estagiário
                        </div>
                        <div class="col-xs-9">
                            <strong>@{{ processo.estagiario_nome }}</strong>
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
            <td width="15%">
                <a :href="processo.show_url">@{{ processo.numero_judicial }}</a>
            </td>
            <td width="10%">@{{ processo.numero_alerj }}</td>
            <td width="5%">@{{ processo.tribunal_nome }}</td>
            <td width="5%">@{{ processo.data_distribuicao }}</td>
            <td width="5%">@{{ processo.acao_nome }}</td>
            <td width="15%">@{{ processo.autor }}</td>
            <td width="15%">@{{ processo.objeto }}</td>
            <td width="10%">@{{ processo.procurador_nome }}</td>
            <td width="10%">@{{ processo.assessor_nome }}</td>
            <td width="10%">@{{ processo.estagiario_nome }}</td>
        </tr>

        <tr v-if="!tables.processos" v-for="processo in tables.processos">
            <td colspan="10" class="text-center">
                <h3>Nenhum processo encontrado</h3>
            </td>
        </tr>
    </tbody>
</table>
