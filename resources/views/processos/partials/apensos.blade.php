<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-3">
                <h4>
                    Apensos <input type="button" value="Criar Apenso" onclick="createApenso()">
                </h4>
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
            @forelse($apensos as $apenso)
                <tr>
                    @foreach($processos as $key=>$processoApensado)
                        @if($key ==$apenso->apensado_id)
                            <td><a href="{{ route('processos.show', ['id' => $apenso->apensado_id]) }}">{{$processoApensado }}</a></td>
                        @endif
                    @endforeach
                </tr>
            @empty
                <p>Nenhum Apenso encontrado</p>
            @endforelse
        </table>

        <form id="form_apensar" name="form_apensar" action="{{ route('processos.apensar') }}" method="post">
            {{ csrf_field() }}
            <select name="apensado_id" class="js-example-basic-single form-control" disabled="disabled" id="apensado_id">
                <option value="">Selecione</option>
                @foreach($processos as $key=>$processoApensado)
                    <option value="{{ $key }}">{{ $processoApensado }}</option>
                @endforeach
            </select>
            <input name="processo_id" type="hidden" value="{{$processo->id}}">
            <input type="submit" value="Apensar Processo" >
        </form>
    </div>
</div>
    <script>
    function createApenso(){
        $('#form_apensar *').prop("disabled",false).prop("readonly",false);
    }


</script>

