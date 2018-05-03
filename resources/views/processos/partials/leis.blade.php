<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-3">
                <h4>
                    <a href="{{ route('home.index') }}">Leis</a>

                </h4>
            </div>
<!--
            <div class="col-md-9">
                <a href="{{ route('leis.create',['processo_id'=>$processo->id]) }}" class="btn btn-primary pull-right" onclick="f_editar()">
                    <i class="fa fa-plus"></i>
                    Nova lei
                </a>
            </div>
            -->

            <div class="col-md-6">
                <form class="form" id="form_apensar" name="form_apensar" action="{{ route('processos.apensar') }}" method="post">
                    {{ csrf_field() }}
                    <input name="processo_id" type="hidden" value="{{$processo->id}}">

                    <div class="row">
                        <div class="col-md-10">
                            <select name="apensado_id" class="select2 form-control" disabled="disabled" id="apensado_id">
                                <option value="">SELECIONE O PROCESSO</option>
                                @foreach($allLeis as $key => $lei)
                                    <option value="{{ $key }}">{{ $lei }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-2">
                            <button type="submit" id='buttonApensar' class="btn btn-primary btn-block" disabled="disabled">
                                <i class="fa fa-plus"></i>
                                Apensar
                            </button>
                        </div>
                    </div>
                </form>
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

