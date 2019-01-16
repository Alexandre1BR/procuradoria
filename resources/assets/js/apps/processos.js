const appName = 'vue-processos'

import Vue from 'vue';
import TextHighlight from 'vue-text-highlight';

Vue.component('text-highlight', TextHighlight);

if (jQuery("#" + appName).length > 0) {
    const app = new Vue({
        el: '#'+appName,

        data: {
            tables: {
                processos: [],

                acoes: [],

                tribunais: [],

                juizes: [],

                procuradores: [],

                assessores: [],

                estagiarios: [],

                meios: [],

                tags: [],

                tipos_processos: [],
            },

            pesquisa: '',
            shearchedWords: '',
            processos_arquivados_incluidos: '',
            processos_arquivados_apenas: '',

            refreshing: false,

            filler: false,

            typeTimeout: null,

            advancedFilter: false,

            modalMode: 'filter',

            form: {
                id: null,
                numero_judicial: null,
                numero_alerj: null,
                tribunal_id: null,
                vara: null,
                data_distribuicao: null,
                acao_id: null,
                juiz_id: null,
                autor: null,
                relator_id: null,
                reu: null,
                procurador_id: null,
                estagiario_id: null,
                assessor_id: null,
                tipo_meio_id: null,
                objeto: null,
                merito: null,
                liminar: null,
                apensos_obs: null,
                recurso: null,
                observacao: null,
                link: null,
                site_alerj_link: null,
                data_arquivamento: null,
                observacao_arquivamento: null,
                tags: [],
                tipo_processo_id: null,
            }
        },

        methods: {
            refresh() {
                let me = this
                me.refreshing = true
                //Highlight
                me.shearchedWords = this.pesquisa.split(" ");

                axios.get('/', {
                    params: {
                        search: this.pesquisa,
                        processos_arquivados_incluidos: this.processos_arquivados_incluidos,
                        processos_arquivados_apenas: this.processos_arquivados_apenas,
                        advancedFilter: this.advancedFilter,
                        filter: this.form
                    }
                })
                .then(function(response) {
                    me.tables.processos = response.data

                    me.refreshing = false
                })
                .catch(function(error) {
                    console.log(error)

                    me.tables.processos = []

                    me.refreshing = false
                })
            },

            typeKeyUp() {
                clearTimeout(this.timeout)

                let me = this

                this.timeout = setTimeout(function () { me.refresh() }, 500)
            },

            clearSearch() {
                this.pesquisa = ''

                this.refresh()
            },

            filter() {
                this.advancedFilter = true

                this.refresh()
            },

            turnAdvancedFilterOff() {
                this.advancedFilter = false

                this.refresh()
            },

            refreshTable(table) {
                let me = this
                axios.get('/'+table)
                    .then(function(response) {
                        me.tables[table] = response.data
                    })
                    .catch(function(error) {
                        console.log(error)

                        me.tables[table] = []
                    })
            },

            openProcesso(id) {
                window.location.href = '/processos/'+id;
            },

            printer() {
                let cabecalhoProcesso = $( "#cabecalho-processos" );
                cabecalhoProcesso.addClass( "hidden-print" );
                window.print();
                cabecalhoProcesso.removeClass( "hidden-print" );
            },

            processosArquivados() {
                //checkboxProcessoLikeRadio();
                this.refresh();
            },

            checkboxProcessoLikeRadio(processos_arquivados) {
                if(processos_arquivados == "apenas") {
                    this.processos_arquivados_incluidos  = "0";
                } else if(processos_arquivados == "incluidos") {
                    this.processos_arquivados_apenas     = "0";
                }
            },
        },

        mounted() {
            this.refresh()

            this.refreshTable('acoes')

            this.refreshTable('tribunais')

            this.refreshTable('juizes')

            this.refreshTable('procuradores')

            this.refreshTable('assessores')

            this.refreshTable('estagiarios')

            this.refreshTable('meios')

            this.refreshTable('tags')

            this.refreshTable('tipos_processos')
        },
    })

}


