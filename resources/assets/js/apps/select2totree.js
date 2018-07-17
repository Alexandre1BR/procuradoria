const appName = 'vue-subjectsToTree'

if(jQuery("#"+appName).length > 0) {
    const app = new Vue({
        el: '#vue-subjectsToTree',
        data: {
            subjectsTree: [],
            subjectsArray: [],
            refreshing: true,
            fullSubjectName: 'Root',
        },
        methods: {
            refresh() {
                me = this

                axios.get('/assuntos/json/array', {
                    params: {}
                })
                    .then(function (response) {
                        me.subjectsArray = response.data
                    })
                    .catch(function (error) {
                        console.log(error)
                        me.subjectsArray = []
                    })

                axios.get('/assuntos/json/tree', {
                    params: {}
                })
                    .then(function (response) {
                        me.subjectsTree = response.data

                        $("#subjectsTreeSelect").select2ToTree({treeData: {dataArr:me.subjectsTree}, maximumSelectionLength: 3});

                        $("#subjectsTreeSelect").on('change', function() {
                            e = document.getElementById("subjectsTreeSelect");
                            id = e.options[e.selectedIndex].value;
                            me.fullSubjectName = me.subjectsArray[id].full_name;
                        });
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
