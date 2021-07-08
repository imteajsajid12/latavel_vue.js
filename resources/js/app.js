
require('./bootstrap');


window.Vue = require('vue');
import VueRouter from 'vue-router'
//notifacation
import 'cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css'
import CxltToastr from 'cxlt-vue2-toastr'
var toastrConfigs = {
    position: 'top right',
    showDuration: 100,
     timeOut:1000,

    showMethod:'fadeIn',

}
Vue.use(CxltToastr, toastrConfigs)

//end


//print
import Vue from 'vue';
import VueHtmlToPaper from 'vue-html-to-paper';
const options = {
    name: '_blank',
    specs: [
      'fullscreen=yes',
      'titlebar=yes',
      'scrollbars=yes'
    ],
    styles: [
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
        'https://unpkg.com/kidlat-css/css/kidlat.css',
        // '/css/kidlat.css'

    ]
  }

  Vue.use(VueHtmlToPaper, options);
  //end
Vue.use(VueRouter)

import App from './components/home.vue'

import coustomer from './components/coustomer.vue'

import Home from'./components/ExampleComponent.vue'
import deshbord from './components/deshbord.vue'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/stock',
            name: 'home',
            component: Home
        },
        {
            path: '/',
            name: 'app',
            component: App
        },
        {
            path: '/Sell',
            name: 'deshbord',
            component: deshbord
        },
        {
            path: '/coustomer',
            name: 'coustomer',
            component: coustomer
        },


    ],
});

const app = new Vue({
    el: '#app',

    router,
});
