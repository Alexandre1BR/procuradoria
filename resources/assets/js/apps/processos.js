const appName = 'vue-processos';

if (jQuery("#" + appName).length > 0) {
    const app = new Vue({
        el: '#'+appName,

        data: {
            processos: [],
            pesquisa: '',
            refreshing: false,
            typeTimeout: null,
        },

        methods: {
            refresh() {
                me = this

                me.refreshing = true

                axios.post('/', { pesquisa: this.pesquisa })
                    .then(function(response) {
                        me.processos = response.data

                        me.refreshing = false
                    })
                    .catch(function(error) {
                        console.log(error)

                        me.processos = []

                        me.refreshing = false
                    })
            },

            typeKeyUp() {
                clearTimeout(this.timeout);

                me = this

                this.timeout = setTimeout(function () {
                    me.refresh();
                }, 500);
            }
        },
        
        mounted() {
            this.refresh()
        },
    })
}
