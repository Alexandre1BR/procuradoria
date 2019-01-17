const appName = 'vue-agenda'

if (jQuery("#" + appName).length > 0) {
    const app = new Vue({
        el: '#'+appName,

        methods: {
            print() {
                window.print();
            },
        },
    })
}