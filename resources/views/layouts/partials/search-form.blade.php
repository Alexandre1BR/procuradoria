<form action="{{ route($routeName) }}" id="searchForm">
    {{ csrf_field() }}

    <div class="form-group pull-right">
        <div class="input-group">
            <input type="text" class="form-control" name="pesquisa" placeholder="Pesquisar" value="{{ $pesquisa }}">

            <div class="input-group-addon" onClick="javascript:document.getElementById('searchForm').submit();"><i class="fa fa-search"></i></div>
        </div>
    </div>
</form>
