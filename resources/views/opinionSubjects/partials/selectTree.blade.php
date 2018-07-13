<div id="vue-subjectsToTree">
    <div class="row">
        <div class="col-md-5">

            @if($source == 'create')
                <label for="{{$attributeName}}">Dentro de qual assunto?</label>
            @else
                <p>Selecione o assunto</p>
            @endif
            <div v-if="refreshing">
                <p class="text-danger">carregando...</p>
            </div>
            <div v-else="refreshing">
                <select name="{{$attributeName}}" id="subjectsTreeSelect" style="width:16em" @include('partials.disabled')></select>
            </div>
        </div>

        <div class="col-md-7">
            <p>Será salvo em</p>
            <label for="{{$attributeName}}">@{{ fullSubjectName }}</label>
        </div>
    </div>
</div>