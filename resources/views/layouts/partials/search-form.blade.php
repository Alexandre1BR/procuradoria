<form action="{{ route($routeSearch) }}" id="searchForm">
    {{ csrf_field() }}

    <div class="form-group pull-right">
        <div class="row">
            <div class="col-xs-4">
                <a href="{{ route($routeCreate) }}" class="btn btn-danger pull-right">
                    <i class="fa fa-plus"></i> Novo
                </a>
            </div>

            <div class="col-xs-8 pull-right">
                <div class="input-group">
                    <input type="text" class="form-control" name="pesquisa" placeholder="Pesquisar" value="{{ $pesquisa or '' }}">

                    <div class="input-group-addon" onClick="javascript:document.getElementById('searchForm').submit();"><i class="fa fa-search"></i></div>
                </div>
            </div>
        </div>
    </div>
</form>
