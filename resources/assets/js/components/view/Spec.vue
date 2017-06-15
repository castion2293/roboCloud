<template>
    <div>
        <v-layout row wrap>
            <v-flex xs2>
                <div class="panel panel-default">
                    <img :src="product.product_img" style="height:10em;width:10em;"  />
                    <p class="text-xs-center mt-2 pb-2 w3-text-black"><b>{{ product.name }}</b></p>
                </div>
            </v-flex>
            <v-flex xs10>
                <v-card class="primary">
                    <v-card-text>12</v-card-text>
                </v-card>
            </v-flex>
        </v-layout>
    </div>
</template>

<script>
    export default {
        props: ['productId'],
        data () {
            return {
                product: {},
            }
        },
        mounted () {
            axios.get(`/home/getTheProduct/${this.productId}`)
                .then(response => {
                    this.product = response.data;
                });
        },
        beforeRouteUpdate (to, from, next) {
            // react to route changes...
            axios.get(`/home/getTheProduct/${to.params.productId}`)
                .then(response => {
                    this.product = response.data;
                });

            // don't forget to call next()
            next();
        },
        methods: {

        }
    }
</script>
