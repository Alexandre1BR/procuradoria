<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-3">
                <h4>
                    <a href="{{ route('home.index') }}">Leis</a>

                </h4>
            </div>

            <div class="col-md-9">
                <a href="{{ route('leis.create',['processo_id'=>$processo->id]) }}" class="btn btn-primary pull-right" onclick="f_editar()">
                    <i class="fa fa-plus"></i>
                    nova lei
                </a>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                @include('leis.partials.table')
            </div>
        </div>
    </div>

</div>

