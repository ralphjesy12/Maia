
/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/

require('./bootstrap');

window.Vue = require('vue');
window.Vuex = require('vuex');

import axios from 'axios';
import VueRouter from 'vue-router'
import VeeValidate from 'vee-validate';

Vue.use(Vuex);
Vue.use(VueRouter);
Vue.use(VeeValidate, { errorBagName: 'veeErrors' })

Vue.prototype.$http = axios;

import store from './vuex/store';

Vue.component('profile', require('./components/Profile.vue'));

const app = new Vue({
    el: '#app',
    store
});
