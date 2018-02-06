<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            @if (! $isFilter)
                <button
                    type="submit"
                    class="btn btn-success pull-right"
                    @include('partials.disabled')
                >
                    Gravar
                </button>
            @else
                <div
                    class="btn btn-success pull-right"
                    data-dismiss="modal"
                    @click="filter"
                >
                    Filtrar
                </div>
            @endif
        </div>
    </div>
</div>
