<!-- Button trigger modal -->
<button type="button" class="btn btn-primary; btn btn-primary pull-right" data-toggle="modal" data-target="#subjectsModal">
    Relacionar Assunto
</button>

<!-- Modal -->
<div class="modal fade" id="subjectsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Relacionar Assunto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form class="form" id="form_relacionarAssunto" name="form_relacionarAssunto" action="{{ route('opinions.relacionarAssunto') }}" method="post">


                <div class="modal-body">

                    {{ csrf_field() }}

                    <input name="opinion_id" type="hidden" value="{{$opinion->id}}">

                    @include(
                            'opinionSubjects.partials.selectTree',
                            [
                                'attributeName' => 'subject_id',
                                'formDisabled' => false,
                                'source' => 'edit'
                            ]
                    )


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" id='buttonRelacionarLei' class="btn btn-primary">
                        <i class="fa fa-plus"></i> Salvar</button>
                </div>

            </form>

        </div>
    </div>
</div>



