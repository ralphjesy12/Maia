
/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/

require('./bootstrap');

window.Vue = require('vue');
window.Vuex = require('vuex');

import axios from 'axios';

Vue.use(Vuex);

Vue.prototype.$http = axios;

import store from './vuex/store';

Vue.component('profile', require('./components/Profile.vue'));

const app = new Vue({
    el: '#app',
    store
});
