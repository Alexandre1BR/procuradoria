@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>

    <script>
        function f_editar(){
            $('form *').removeAttr('readonly').removeAttr('disabled');
        }
    </script>
@endif
