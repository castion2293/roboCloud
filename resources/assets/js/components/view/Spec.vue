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
        data () {
            return {
                product: {},
            }
        },
        mounted () {
            Event.listen('myProduct', (product) => this.product = product);
        },
        methods: {

        }
    }
</script>
