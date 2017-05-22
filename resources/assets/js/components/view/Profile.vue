<template>
    <div>
        <h1>{{ user.name }}</h1>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                user: [],
                counter: 0,
            }
        },

        mounted () {
//            axios.get('/home/getCurrentUser')
//                .then(response => {
//                    this.user = response.data
//                });
            this.fetchData();
            setInterval(this.fetchData, 10000)
        },

        methods: {
            fetchData () {
                axios.get('/home/getCurrentUser')
                    .then(response => {
                        this.user = response.data
                        console.log(this.user)
                    });
            }
        }

    }
</script>
