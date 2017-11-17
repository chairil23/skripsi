import Vue from 'vue'

import App from './components/App.vue'
import router from './router/index'
import VueSession from 'vue-session'

Vue.use(VueSession)

new Vue({
    el: '#app',
    template : '<app></app>',
    components: {App},
    router
});