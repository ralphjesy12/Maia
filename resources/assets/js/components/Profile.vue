<template>
    <div class="profile">
        <template v-if="!dataLoaded">
            <ProgressBar :message="message"></ProgressBar>
        </template>
        <template v-if="dataLoaded">
            <div class="box">
                <form>
                    <h1 class="title">General Info</h1>
                    <h2 class="subtitle">By letting us know your name, we can make your Maia experience much more personal</h2>
                    <div class="columns">
                        <div class="column is-3">
                            <div class="field">
                                <label class="label">First Name</label>
                                <p class="control">
                                    <input class="input" type="text" placeholder="First Name" v-model="currentUser.firstname" :class="{ 'is-danger': errors.has('firstname') }"  name="firstname" >
                                    <span v-show="errors.has('firstname')" class="help is-danger">{{ errors.first('firstname') }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="field">
                                <label class="label">Last Name</label>
                                <p class="control">
                                    <input class="input" type="text" placeholder="Last Name" v-model="currentUser.lastname" :class="{ 'is-danger': errors.has('lastname') }"  name="lastname" >
                                    <span v-show="errors.has('lastname')" class="help is-danger">{{ errors.first('lastname') }}</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <hr />

                    <h1 class="title">Account Details</h1>
                    <h2 class="subtitle">Here you can change your username and email you want to use for your login</h2>
                    <div class="columns">
                        <div class="column is-3">
                            <div class="field">
                                <label class="label">Username</label>
                                <p class="control">
                                    <input class="input" type="text" placeholder="Username" v-model="currentUser.username" :class="{ 'is-danger': errors.has('username') }"  name="username">
                                    <span v-show="errors.has('username')" class="help is-danger">{{ errors.first('username') }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="field">
                                <label class="label">Email Address</label>
                                <p class="control">
                                    <input class="input" type="text" placeholder="Email Address" v-model="currentUser.email" :class="{ 'is-danger': errors.has('email') }"  name="email" >
                                    <span v-show="errors.has('email')" class="help is-danger">{{ errors.first('email') }}</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <hr />

                    <h1 class="title">Security </h1>
                    <div class="columns">
                        <div class="column is-3">
                            <div class="field">
                                <label class="label">Current Password</label>
                                <p class="control">
                                    <input class="input" type="password" placeholder="********" :class="{ 'is-danger': errors.has('currentpassword') }" name="currentpassword" >
                                    <span v-show="errors.has('currentpassword')" class="help is-danger">{{ errors.first('currentpassword') }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="field">
                                <label class="label">New Password</label>
                                <p class="control">
                                    <input class="input" type="password" placeholder="********" :class="{ 'is-danger': errors.has('newpassword') }" name="newpassword" >
                                    <span v-show="errors.has('newpassword')" class="help is-danger">{{ errors.first('newpassword') }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="field">
                                <label class="label">Confirm Password</label>
                                <p class="control">
                                    <input class="input" type="password" placeholder="********" :class="{ 'is-danger': errors.has('confirmpassword') }" name="confirmpassword" >
                                    <span v-show="errors.has('confirmpassword')" class="help is-danger">{{ errors.first('confirmpassword') }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="field">
                                <label class="label">&nbsp;</label>
                                <p class="control">
                                    <a class="button is-primary">Change</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <hr />

                    <div class="field">
                        <label class="label">&nbsp;</label>
                        <p class="control">
                            <a class="button is-light">Delete Account</a>
                        </p>
                    </div>

                    <p class="help">
                        We do our best to give you a great experience. We'll be sad to see you go.
                    </p>
                </form>
            </div>

        </template>
    </div>
</template>
<script>
import { Tabs, TabPane } from 'vue-bulma-tabs';
import ProgressBar from './Progress.vue';
import { mapState } from 'vuex';
import { Validator } from 'vee-validate';

export default {
    data(){
        return {
            message : 'Please wait...',
            dataLoaded : false,
            errors: null
        }
    },
    validator: null,
    components: {
        Tabs,
        TabPane,
        ProgressBar
    },
    watch: {
        'currentUser.email'(value) {
            this.validator.validate('email', value);
        },
        'currentUser.username'(value) {
            this.validator.validate('username', value);
        },
        'currentUser.firstname'(value) {
            this.validator.validate('firstname', value);
        },
        'currentUser.lastname'(value) {
            this.validator.validate('lastname', value);
        },
        'currentUser.currentpassword'(value) {
            this.validator.validate('currentpassword', value);
        },
        'currentUser.newpassword'(value) {
            this.validator.validate('newpassword', value);
        },
        'currentUser.confirmpassword'(value) {
            this.validator.validate('confirmpassword', value);
        },
    },
    methods: {
        getProfileData(){
            var self = this;

            self.$store.commit('progressStart');
            self.$store.dispatch('getCurrentUser');

            setTimeout(function(){
                self.dataLoaded = true;
                self.$store.commit('progressStop');
            },3000);
        },
    },
    mounted() {
        this.getProfileData();
    },
    created(){
        this.validator = new Validator({
            email: 'required|email',
            username: 'required|alpha_num',
            firstname: 'required|alpha_spaces',
            lastname: 'required|alpha_spaces',
            currentpassword: 'required|min:6',
            newpassword: 'required|min:6|confirmed:confirmpassword',
            confirmpassword: 'required|min:6',
        });
        this.$set(this, 'errors', this.validator.errorBag);
    },
    computed: mapState({
        currentUser : state => state.currentUser
    })
}
</script>
