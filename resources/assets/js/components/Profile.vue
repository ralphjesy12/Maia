<template>
    <div class="profile">
        <tabs>
            <tab-pane label="General">
                <div class="content">
                    <div class="columns">
                        <div class="column is-6">
                            <div class="field">
                                <label class="label">Username</label>
                                <p class="control">
                                    <input class="input" type="text" placeholder="Username">
                                </p>
                            </div>
                            <div class="field">
                                <label class="label">Email Address</label>
                                <p class="control">
                                    <input class="input" type="text" placeholder="Email Address">
                                </p>
                            </div>
                            <div class="field">
                                <label class="label">First Name</label>
                                <p class="control">
                                    <input class="input" type="text" placeholder="First Name">
                                </p>
                            </div>
                            <div class="field">
                                <label class="label">Last Name</label>
                                <p class="control">
                                    <input class="input" type="text" placeholder="Text input">
                                </p>
                            </div>
                            <div class="block">
                                <a class="button is-primary">Save changes</a>
                                <em class="is-pulled-right">All changes were saved</em>
                            </div>
                        </div>
                    </div>
                </div>
            </tab-pane>
            <tab-pane label="Personal Info">
                <div class="notification is-danger">
                    <button class="delete"></button> Coming soon
                </div>
            </tab-pane>
            <tab-pane label="Security">
                <div class="notification is-danger">
                    <button class="delete"></button> Coming soon
                </div>
            </tab-pane>
            <tab-pane label="Notifications">
                <div class="notification is-danger">
                    <button class="delete"></button> Coming soon
                </div>
            </tab-pane>
        </tabs>

    </div>

</template>
<script>

import { Tabs, TabPane } from 'vue-bulma-tabs';

export default {
    components: {
        Tabs,
        TabPane
    },
    mounted() {

    }
}
</script>
