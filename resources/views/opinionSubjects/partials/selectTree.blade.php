<div id="vue-subjectsToTree">
    <div v-if="refreshing">
        <p class="text-danger">carregando...</p>
    </div>
    <div v-else="refreshing">
        <select name="{{$attributeName}}" id="subjectsTreeSelect" style="width:16em" @include('partials.disabled')></select>
    </div>
</div>