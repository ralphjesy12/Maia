<template>
    <div class="progress-bar has-text-centered">
        <p>{{ message }}</p>
        <progress class="progress is-small" :class="{ 'is-hidden' : !progressIsActive }" :value="progressPosition" max="100">15%</progress>
    </div>
</template>

<script>
import { mapMutations } from 'vuex';
import { mapState } from 'vuex';

export default {
    props : {
        message : {
            type : String,
            required : true
        }
    },
    components: {

    },
    created() {
    
    },
    computed : mapState([
        'progressIsActive',
        'progressPosition'
    ])
}
</script>
