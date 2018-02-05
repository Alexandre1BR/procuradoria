<div class="form-group pull-right">
    <div class="row">
        <div class="col-xs-4">
            <a href="{{ route($routeCreate) }}" class="btn btn-danger pull-right">
                <i class="fa fa-plus"></i> Novo
            </a>
        </div>

        <div class="col-xs-8 pull-right">
            <div class="input-group">
                <input v-model="pesquisa" class="form-control" placeholder="Pesquisar" @keyup="typeKeyUp">

                <div class="input-group-addon" @click="refresh"><i class="fa fa-search"></i></div>
            </div>
        </div>
    </div>
</div>
