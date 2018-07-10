<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-6">
                <h4>
                    <a href="{{ route('opinionSubjects.index') }}">Assuntos</a>
                </h4>
            </div>
            <div class="col-md-6">
                <form class="form" id="form_relacionarAssunto" name="form_relacionarAssunto" action="{{ route('opinions.relacionarAssunto') }}" method="post">
                    {{ csrf_field() }}
                    <input name="opinion_id" type="hidden" value="{{$opinion->id}}">

                    <div class="row">
                        <div class="col-md-9">
                            <select name="subject_id" class="select2 form-control" disabled="disabled" id="subject_id">
                                <option value="">SELECIONE O ASSUNTO</option>
                                @foreach($allOpinionSubjects as $key => $subject)
                                <option value="{{ $key }}">{{ $subject }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-3">
                            <button type="submit" id='buttonRelacionarLei' class="btn btn-primary btn-block" disabled="disabled">
                                <i class="fa fa-plus"></i> Relacionar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                @include('opinionSubjects.partials.table')
            </div>
        </div>
    </div>
</div>