<form action="{{ route('juizes.index') }}">
    {{ csrf_field() }}

    <div class="form-group pull-right">
        <div class="input-group">
            <li><a href="{{ route('juizes.create') }}">Juizes - Create</a></li>

            <input type="text" class="form-control" name="pesquisa" placeholder="Pesquisar" value="{{ $pesquisa }}">
            <div class="input-group-addon"><i class="fa fa-search"></i></div>

            <div class="form-group col-md-4">
                <div class="row">
                    <button type="submit" class="btn btn-primary">Pesquisar</button>
                </div>
            </div>
        </div>
    </div>
</form>
