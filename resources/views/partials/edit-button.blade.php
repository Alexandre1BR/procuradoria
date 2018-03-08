@if(isset($model) && ! is_null($model->id))
    <a href="#" id="editar" class="btn btn-primary pull-right" onclick="f_editar()")>Editar</a>
    <script>
        function f_editar(){
            $('form *').removeAttr('readonly').removeAttr('disabled');
            $('#editar').attr('disabled','disabled');
            $('#gravar').removeAttr('readonly').removeAttr('disabled');
        }
    </script>
@endif
