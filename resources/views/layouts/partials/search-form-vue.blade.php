<div class="form-group pull-right">
    <div class="row">
        <div class="col-xs-4">
            <a href="{{ route($routeCreate) }}" class="btn btn-danger pull-right">
                <i class="fa fa-plus"></i> Novo</a>
        </div>

        <div class="col-xs-8 pull-right">
            <div class="input-group" role="button">
                <input v-model="pesquisa" name="pesquisa" class="form-control" placeholder="Pesquisar" @keyup="typeKeyUp">

                <input type="checkbox"  v-model="processos_arquivados" class="form-control">

                <div v-if="!pesquisa" class="input-group-addon" @click="refresh"><i class="fa fa-search"></i></div>
                <div v-if="pesquisa" class="input-group-addon" @click="clearSearch"><i class="fa fa-close text-danger"></i></div>
            </div>
        </div>
    </div>
</div>
