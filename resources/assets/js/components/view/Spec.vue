<template>
    <div>
        <v-card class="grey lighten-3">
            <v-layout row wrap>
                <v-flex md4>
                    <div class="panel panel-default mt-3 pl-5">
                        <img :src="product.product_img">
                    </div>
                </v-flex>
                <v-flex md8>
                    <v-layout row wrap>
                        <v-flex md12 class="pr-5">
                            <h6 class="w3-bottombar"><b>手臂規格表</b></h6>
                        </v-flex>

                        <v-flex md6 class="pr-0">
                            <p class="w3-border-bottom">型號</p>
                        </v-flex>
                        <v-flex md6 class="pr-5 pl-0">
                            <p class="w3-border-bottom">{{ product.name }}</p>
                        </v-flex>

                        <v-flex md6 class="pr-0">
                            <p class="w3-border-bottom">型態</p>
                        </v-flex>
                        <v-flex md6 class="pr-5 pl-0">
                            <p class="w3-border-bottom">水平多軸</p>
                        </v-flex>

                        <v-flex md6 class="pr-0">
                            <p class="w3-border-bottom">控制軸數</p>
                        </v-flex>
                        <v-flex md6 class="pr-5 pl-0">
                            <p class="w3-border-bottom">4軸</p>
                        </v-flex>

                        <v-flex md6 class="pr-0">
                            <p class="w3-border-bottom">臂長</p>
                        </v-flex>
                        <v-flex md6 class="pr-5 pl-0">
                            <p class="w3-border-bottom">600mm(300mm+300mm)</p>
                        </v-flex>

                        <v-flex md6 class="pr-0">
                            <v-layout row wrap>
                                <v-flex md4>
                                    <p class="">工作範圍</p>
                                </v-flex>
                                <v-flex md8>
                                    <p class="w3-border-bottom">第1軸</p>
                                    <p class="w3-border-bottom">第2軸</p>
                                    <p class="w3-border-bottom">第3軸(Z軸)</p>
                                    <p class="w3-border-bottom">第4軸(Z軸旋轉)</p>
                                </v-flex>
                            </v-layout>
                        </v-flex>
                        <v-flex md6 class="pr-5 pl-0">
                            <p class="w3-border-bottom">&#177;125&deg;</p>
                            <p class="w3-border-bottom">&#177;145&deg;</p>
                            <p class="w3-border-bottom">0~150mm(option 300mm)</p>
                            <p class="w3-border-bottom">&#177;360&deg;</p>
                        </v-flex>

                        <v-flex md6 class="pr-0">
                            <v-layout row wrap>
                                <v-flex md4>
                                    <p class="">最大速度</p>
                                </v-flex>
                                <v-flex md8>
                                    <p class="w3-border-bottom">第1軸</p>
                                    <p class="w3-border-bottom">第2軸</p>
                                    <p class="w3-border-bottom">第3軸(Z軸)</p>
                                    <p class="w3-border-bottom">第4軸(Z軸旋轉)</p>
                                    <p class="w3-border-bottom">合成</p>
                                </v-flex>
                            </v-layout>
                        </v-flex>
                        <v-flex md6 class="pr-5 pl-0">
                            <p class="w3-border-bottom">450&deg;/s</p>
                            <p class="w3-border-bottom">450&deg;/s</p>
                            <p class="w3-border-bottom">2000mm/s</p>
                            <p class="w3-border-bottom">1700&deg;/s</p>
                            <p class="w3-border-bottom">7.1m/s</p>
                        </v-flex>

                        <v-flex md6 class="pr-0">
                            <p class="w3-border-bottom">循環時間(2kg負載)</p>
                        </v-flex>
                        <v-flex md6 class="pr-5 pl-0">
                            <p class="w3-border-bottom">0.45s</p>
                        </v-flex>

                        <v-flex md6 class="pr-0">
                            <p class="w3-border-bottom">最大負載重量</p>
                        </v-flex>
                        <v-flex md6 class="pr-5 pl-0">
                            <p class="w3-border-bottom">10kg</p>
                        </v-flex>

                        <v-flex md6 class="pr-0">
                            <p class="w3-border-bottom">可允許貫量</p>
                        </v-flex>
                        <v-flex md6 class="pr-5 pl-0">
                            <p class="w3-border-bottom">0.2kg&middot;m&sup2;</p>
                        </v-flex>

                        <v-flex md6 class="pr-0">
                            <v-layout row wrap>
                                <v-flex md4>
                                    <p class="">重現精度</p>
                                </v-flex>
                                <v-flex md8>
                                    <p class="w3-border-bottom">X-Y</p>
                                    <p class="w3-border-bottom">Z(第3軸)</p>
                                    <p class="w3-border-bottom">&theta;(Z軸旋轉)</p>
                                </v-flex>
                            </v-layout>
                        </v-flex>
                        <v-flex md6 class="pr-5 pl-0">
                            <p class="w3-border-bottom">&#177;0.01mm</p>
                            <p class="w3-border-bottom">&#177;0.015mm</p>
                            <p class="w3-border-bottom">&#177;0.007&deg;</p>
                        </v-flex>

                        <v-flex md6 class="pr-0">
                            <p class="w3-border-bottom">手臂I/O</p>
                        </v-flex>
                        <v-flex md6 class="pr-5 pl-0">
                            <p class="w3-border-bottom">8 inputs/8 outputs</p>
                        </v-flex>

                        <v-flex md6 class="pr-0">
                            <p class="w3-border-bottom">位置偵測</p>
                        </v-flex>
                        <v-flex md6 class="pr-5 pl-0">
                            <p class="w3-border-bottom">絕對型</p>
                        </v-flex>

                        <v-flex md6 class="pr-0">
                            <p class="w3-border-bottom">手臂控制器纜線</p>
                        </v-flex>
                        <v-flex md6 class="pr-5 pl-0">
                            <p class="w3-border-bottom">3.5m</p>
                        </v-flex>

                        <v-flex md6 class="pr-0">
                            <p class="w3-border-bottom">重量</p>
                        </v-flex>
                        <v-flex md6 class="pr-5 pl-0">
                            <p class="w3-border-bottom">23kg</p>
                        </v-flex>

                    </v-layout>
                </v-flex>
            </v-layout>
        </v-card>
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
