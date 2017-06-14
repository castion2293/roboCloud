<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <img :src="product.product_img" style="height:10em;width:10em;"  />
                    <p class="text-xs-center mt-2 pb-2 w3-text-black"><b>{{ product.name }}</b></p>
                </div>
            </div>
        </div>
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
