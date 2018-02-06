

require('./bootstrap');

window.Vue = require('vue');

Vue.component('select2', {
    props: ['options', 'value'],
    template: '#select2-template',
    mounted: function () {
        var vm = this
        $(this.$el)
        // init select2
            .select2({ data: this.options })
            .val(this.value)
            .trigger('change')
            // emit event on change.
            .on('change', function () {
                vm.$emit('input', this.value)
            })
    },
    watch: {
        value: function (value) {
            // update value
            $(this.$el).val(value)
        },
        options: function (options) {
            // update options
            $(this.$el).empty().select2({ data: options })
        }
    },
    destroyed: function () {
        $(this.$el).off().select2('destroy')
    }
})

require('./apps/processos.js');

jQuery(document).ready(function() {
    jQuery('#calendar').fullCalendar({
        locale: 'pt-br',

        eventSources: [
            '/agenda/feed',
        ],

        header: { center: 'month,agendaDay,agendaWeek,listYear' }, // buttons for switching between views

        views: {
            month: {
                buttonText: 'mês'
            },
            agendaDay: {
                buttonText: 'dia'
            },
            agendaWeek: {
                buttonText: 'semana'
            },
            listYear: {
                buttonText: 'ano'
            },
        }
    })
});
