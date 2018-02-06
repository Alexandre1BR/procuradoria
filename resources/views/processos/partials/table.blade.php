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

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Número judicial</th>
            <th>Número ALERJ</th>
            <th>Tribunal</th>
            <th class="hidden-xs">Distribuído em</th>
            <th>Ação</th>
            <th class="hidden-xs">Autor</th>
            <th class="hidden-xs">Objeto</th>
            <th class="hidden-xs">Procurador</th>
            <th class="hidden-xs">Assessor</th>
            <th class="hidden-xs">Estagiário</th>
        </tr>
    </thead>

    <tbody>
        <tr v-if="processos" v-for="processo in processos">
            <td>
                <a :href="processo.show_url">@{{ processo.numero_judicial }}</a>
            </td>
            <td>@{{ processo.numero_alerj }}</td>
            <td>@{{ processo.tribunal_nome }}</td>
            <td class="hidden-xs">@{{ processo.data_distribuicao }}</td>
            <td>@{{ processo.acao_nome }}</td>
            <td class="hidden-xs">@{{ processo.autor }}</td>
            <td class="hidden-xs">@{{ processo.objeto }}</td>
            <td class="hidden-xs">@{{ processo.procurador_nome }}</td>
            <td class="hidden-xs">@{{ processo.assessor_nome }}</td>
            <td class="hidden-xs">@{{ processo.estagiario_nome }}</td>
        </tr>

        <tr v-if="!processos" v-for="processo in processos">
            <td colspan="10" class="text-center">
                <h3>Nenhum processo encontrado</h3>
            </td>
        </tr>
    </tbody>
</table>
