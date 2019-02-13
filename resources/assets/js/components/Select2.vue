<template>
    <select class="form-control select2" :value="value" :multiple="multiple">
        <option value="0">SELECIONE</option>
        <option v-for="option in options" :value="option.id" ref="input">
            {{ option.text }}
        </option>
    </select>
</template>

<script>
export default {
    props: ['options', 'value', 'multiple'],

    mounted: function() {
        var vm = this
        $(this.$el)
            .val(this.value)
            .on('select2:select', function() {
                vm.$emit('input', this.value)
            })
    },
}
</script>
