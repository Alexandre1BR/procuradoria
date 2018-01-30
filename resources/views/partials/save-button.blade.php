<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <button
                type="submit"
                class="btn btn-success pull-right"
                @include('partials.disabled')
            >
                @if ($isFilter)
                    Filtrar
                @else
                    Gravar
                @endif
            </button>
        </div>
    </div>
</div>
