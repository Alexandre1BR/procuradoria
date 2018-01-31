<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-6">
                <h4>
                    <a href="{{ route('home.index') }}">Apensos</a>
                </h4>
            </div>

            <div class="col-md-6">
                <form class="form" id="form_apensar" name="form_apensar" action="{{ route('processos.apensar') }}" method="post">
                    {{ csrf_field() }}
                    <input name="processo_id" type="hidden" value="{{$processo->id}}">

                    <div class="row">
                        <div class="col-md-10">
                            <select name="apensado_id" class="select2 form-control" disabled="disabled" id="apensado_id">
                                <option value="">Selecione</option>
                                @foreach($processos as $key=>$processoApensado)
                                    <option value="{{ $key }}">{{ $processoApensado }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary btn-block">
                                <i class="fa fa-plus"></i>
                                apensar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="panel-body">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Processo</th>
                </tr>
            </thead>
            @forelse($apensos as $key => $apenso)
                {{--Apensados--}}
                @if($processo->id == $apenso->apensado->id)
                    <tr>
                        {{--<td>{{$apenso->processo->id}}</td>--}}
                        <td><a href="{{ route('processos.show', ['id' => $apenso->processo->id]) }}">{{$apenso->processo->numero_judicial }}</a></td>
                    </tr>
                @endif
                @if($processo->id == $apenso->processo->id)
                    <tr>
                        {{--<td>{{$apenso->apensado->id}}</td>--}}
                        <td><a href="{{ route('processos.show', ['id' => $apenso->apensado->id]) }}">{{$apenso->apensado->numero_judicial }}</a></td>
                    </tr>
                @endif
            @empty
                <p>Nenhum Apenso encontrado</p>
            @endforelse
        </table>
    </div>
</div>
    <script>
    function createApenso(){
        $('#form_apensar *').prop("disabled",false).prop("readonly",false);
    }
</script>

