
/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/

require('./bootstrap');

window.Vue = require('vue');
window.Vuex = require('vuex');

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        progressIsActive : false,
        progressInterval : null,
        progressTimeoutSpeed : 10,
        progressPosition : 0,
    },
    mutations: {
        progressStart(state){
            state.progressIsActive = true;
            state.progressInterval = setInterval(function(){
                state.progressPosition += 1;
                if(state.progressPosition> 100)
                    state.progressPosition = 0;
            },state.progressTimeoutSpeed);
        },
        progressStop(state){
            state.progressPosition = 0;
            clearInterval(state.progressInterval);
            state.progressIsActive = false;
        },
        progressSet(state,position){
            state.progressIsActive = true;
            clearInterval(state.progressInterval);
            state.progressPosition = position;
        }
    }
})

Vue.component('profile', require('./components/Profile.vue'));



const app = new Vue({
    el: '#app',
    store
});
