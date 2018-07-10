const appName = 'vue-subjectsToTree'

if(jQuery("#"+appName).length > 0) {
    const app = new Vue({
        el: '#vue-subjectsToTree',
        data: {
            subjectsTree: [],
            refreshing: true,
        },
        methods: {
            refresh() {
                me = this

                axios.get('/assuntos/json/tree', {
                    params: {}
                })
                    .then(function (response) {
                        me.subjectsTree = response.data
                        $("#subjectsTreeSelect").select2ToTree({treeData: {dataArr:me.subjectsTree}, maximumSelectionLength: 3});
                    })
                    .catch(function (error) {
                        console.log(error)

                        me.subjectsTree = []
                    })

                me.refreshing = false
            },
        },
        beforeMount() {
            this.refresh()
        },
    });
}