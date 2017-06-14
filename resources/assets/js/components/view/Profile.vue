<template>
    <div>
        <h1>{{ user.name }}</h1>
        <button @click="postData">click</button>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                user: [],
            }
        },

        mounted () {
            this.fetchData();
        },

        methods: {
            fetchData () {
                axios.get('/home/getCurrentUser')
                    .then(response => {
                        this.user = response.data
                        console.log(this.user)
                    });
            },
            postData () {
                axios.post('/postdata', {
                    firstName: 'Fred',
                    lastName: 'zhang'
                }).then(response => {
                    console.log(response);
                }).catch(error => {
                    console.log(error);
                });
            }
        }

    }
</script>
