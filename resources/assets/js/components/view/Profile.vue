<template>
    <h1>{{ user.name }}</h1>
</template>

<script>
    export default {
        data () {
            return {
                user: []
            }
        },

        mounted () {
            axios.get('/home/getCurrentUser')
                .then(response => {
                    this.user = response.data
                });
        },
    }
</script>
