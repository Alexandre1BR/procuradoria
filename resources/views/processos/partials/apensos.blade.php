<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-3">
                <h4>
                    Apensos
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
                    <td>{{$apenso->processo_id}}</td>
                </tr>
            @empty
                <p>Nenhum Apenso encontrado</p>
            @endforelse
        </table>
    </div>
</div>
