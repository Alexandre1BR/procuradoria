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
                axios.get('/assuntos/json/array', {
                    params: {}
                })
                    .then(response => {
                        this.subjectsArray = response.data
                    })
                    .catch(error => {
                        console.log(error)
                        this.subjectsArray = []
                    })

                axios.get('/assuntos/json/tree', {
                    params: {}
                })
                    .then(response => {
                        this.subjectsTree = response.data

                        $("#subjectsTreeSelect").select2ToTree({treeData: {dataArr:this.subjectsTree}, maximumSelectionLength: 3});

                        $("#subjectsTreeSelect").on('change', () => {
                            e = document.getElementById("subjectsTreeSelect");
                            id = e.options[e.selectedIndex].value;
                            this.fullSubjectName = this.subjectsArray[id].full_name;
                        });
                    })
                    .catch(error => {
                        console.log(error)

                        this.subjectsTree = []
                    })

                this.refreshing = false
            },
        },
        beforeMount() {
            this.refresh()
        },
    });
}
