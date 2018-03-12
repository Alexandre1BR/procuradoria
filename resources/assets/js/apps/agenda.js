const appName = 'vue-agenda'

if (jQuery("#" + appName).length > 0) {
    const app = new Vue({
        el: '#'+appName,

        methods: {
            printer() {
                $( "#cabecalho-agenda" ).addClass( "hidden-print" );
                window.print();
                $( "#cabecalho-agenda" ).removeClass( "hidden-print" );
            },
        },
    })
}