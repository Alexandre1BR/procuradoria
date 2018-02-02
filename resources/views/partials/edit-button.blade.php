@if(isset($model) && ! is_null($model->id))
    <a href="#" class="btn btn-primary pull-right" onclick="f_editar()">editar</a>

    <script>
        function f_editar(){
            $('form *').removeAttr('readonly').removeAttr('disabled');
        }
    </script>
@endif
