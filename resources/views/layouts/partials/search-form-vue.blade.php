<div class="form-group pull-right">
    <div class="row">
        <div class="col-xs-4">
            <a href="{{ route($routeCreate) }}" class="btn btn-danger pull-right">
                <i class="fa fa-plus"></i> Novo</a>
        </div>

        <div class="col-xs-8 pull-right">
            <div class="input-group" role="button">
                <input v-model="pesquisa" class="form-control" placeholder="Pesquisar" @keyup="typeKeyUp">

                <div v-if="!pesquisa" class="input-group-addon" @click="refresh"><i class="fa fa-search"></i></div>
                <div v-if="pesquisa" class="input-group-addon" @click="clearSearch"><i class="fa fa-close text-danger"></i></div>
            </div>
            <div>
                <input type="checkbox" v-model="processos_arquivados_incluidos" id="processos_arquivados_incluidos" value="true" @change="processosArquivados" v-bind:true-value="1" v-bind:false-value="0">
                <label for="processos_arquivados_incluidos"> Mostrar arquivados </label>
            </div>
            <div>
                <input type="checkbox" v-model="processos_arquivados_apenas" id="processos_arquivados_apenas" value="true" @change="processosArquivados" v-bind:true-value="1" v-bind:false-value="0">
                <label for="processos_arquivados_apenas"> Exibir apenas os Processos Arquivados </label>
            </div>
        </div>
    </div>
</div>
