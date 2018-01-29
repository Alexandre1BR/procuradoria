
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

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
