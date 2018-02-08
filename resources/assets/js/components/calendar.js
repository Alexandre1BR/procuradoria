/**
 * Calendar instantiation
 */

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
})
