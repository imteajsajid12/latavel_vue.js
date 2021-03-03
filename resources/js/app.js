
require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
//notifacation
import 'cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css'
import CxltToastr from 'cxlt-vue2-toastr'
var toastrConfigs = {
    position: 'top right',
    showDuration: 1000,
     timeOut:7000,
 
    showMethod:'fadeIn',

}
Vue.use(CxltToastr, toastrConfigs)

//end



Vue.use(VueRouter)

import App from './components/home.vue'

import Home from'./components/ExampleComponent.vue'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/sell',
            name: 'home',
            component: Home
        },
        {
            path: '/',
            name: 'app',
            component: App
        },

    ],
});

const app = new Vue({
    el: '#app',

    router,
});
