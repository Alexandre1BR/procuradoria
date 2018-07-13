<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-6">
                <h4>
                    <a href="{{ route('opinionSubjects.index') }}">Assuntos</a>
                </h4>
            </div>
            <div class="col-md-6">
                @include('opinions.partials.opinionSubjectsModal')

            </div>

        </div>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                @include('opinionSubjects.partials.table', ['tableInsideOpinions' => 'true'])
            </div>
        </div>
    </div>
</div>