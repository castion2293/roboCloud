<template>
    <v-card>
        <v-tabs grow light>
            <v-tabs-bar slot="activators">
                <v-tabs-slider></v-tabs-slider>
                <v-tabs-item :href="'#mobile-tabs-3-1'">
                    <b>單月產能</b>
                </v-tabs-item>
                <v-tabs-item :href="'#mobile-tabs-3-2'">
                    <b>累計產能</b>
                </v-tabs-item>
                <v-tabs-item :href="'#mobile-tabs-3-3'">
                    <b>圓餅圖</b>
                </v-tabs-item>
            </v-tabs-bar>
            <v-tabs-content :id="'mobile-tabs-3-1'">
                <v-card flat class="grey lighten-4">
                    <v-card-text>
                        <yield-data></yield-data>
                    </v-card-text>
                </v-card>
            </v-tabs-content>
            <v-tabs-content :id="'mobile-tabs-3-2'">
                <v-card flat class="grey lighten-4">
                    <v-card-text>
                        <yield-cumulate-data></yield-cumulate-data>
                    </v-card-text>
                </v-card>
            </v-tabs-content>
            <v-tabs-content :id="'mobile-tabs-3-3'" class="grey lighten-4">
                <v-card flat class="grey lighten-4">
                    <v-layout row wrap>
                        <v-flex md3 class="container pl-3 pr-3">
                            <yield-pie-data></yield-pie-data>
                            <div class="text-xs-center mt-1 grey--text darken-2">
                                <b>一月</b>
                            </div>
                        </v-flex>
                        <v-flex md3 class="container pl-3 pr-3">
                            <yield-pie-data></yield-pie-data>
                            <div class="text-xs-center mt-1 grey--text darken-2">
                                <b>二月</b>
                            </div>
                        </v-flex>
                        <v-flex md3 class="container pl-3 pr-3">
                            <yield-pie-data></yield-pie-data>
                            <div class="text-xs-center mt-1 grey--text darken-2">
                                <b>三月</b>
                            </div>
                        </v-flex>
                        <v-flex md3 class="container pl-3 pr-3">
                            <yield-pie-data></yield-pie-data>
                            <div class="text-xs-center mt-1 grey--text darken-2">
                                <b>四月</b>
                            </div>
                        </v-flex>
                        <v-flex md3 class="container pl-3 pr-3">
                            <yield-pie-data></yield-pie-data>
                            <div class="text-xs-center mt-1 grey--text darken-2">
                                <b>五月</b>
                            </div>
                        </v-flex>
                        <v-flex md3 class="container pl-3 pr-3">
                            <yield-pie-data></yield-pie-data>
                            <div class="text-xs-center mt-1 grey--text darken-2">
                                <b>六月</b>
                            </div>
                        </v-flex>
                        <v-flex md3 class="container pl-3 pr-3">
                            <yield-pie-data></yield-pie-data>
                            <div class="text-xs-center mt-1 grey--text darken-2">
                                <b>七月</b>
                            </div>
                        </v-flex>
                        <v-flex md3 class="container pl-3 pr-3">
                            <yield-pie-data></yield-pie-data>
                            <div class="text-xs-center mt-1 grey--text darken-2">
                                <b>八月</b>
                            </div>
                        </v-flex>
                        <v-flex md3 class="container pl-3 pr-3">
                            <yield-pie-data></yield-pie-data>
                            <div class="text-xs-center mt-1 grey--text darken-2">
                                <b>九月</b>
                            </div>
                        </v-flex>
                        <v-flex md3 class="container pl-3 pr-3">
                            <yield-pie-data></yield-pie-data>
                            <div class="text-xs-center mt-1 grey--text darken-2">
                                <b>十月</b>
                            </div>
                        </v-flex>
                        <v-flex md3 class="container pl-3 pr-3">
                            <yield-pie-data></yield-pie-data>
                            <div class="text-xs-center mt-1 grey--text darken-2">
                                <b>十一月</b>
                            </div>
                        </v-flex>
                        <v-flex md3 class="container pl-3 pr-3">
                            <yield-pie-data></yield-pie-data>
                            <div class="text-xs-center mt-1 grey--text darken-2">
                                <b>十二月</b>
                            </div>
                        </v-flex>
                    </v-layout>
                </v-card>
            </v-tabs-content>
        </v-tabs>
    </v-card>
</template>

<script>
    import yieldData from '../data/YearlyYieldData.vue';
    import yieldCumulateData from '../data/YearlyYieldCumulateData.vue';
    import yieldPieData from '../data/YearlyYieldPieData.vue';

    export default {
        components: {
            'yield-data': yieldData,
            'yield-cumulate-data': yieldCumulateData,
            'yield-pie-data': yieldPieData,
        },

        data () {
            return {

            }
        },

        methods: {

        }
    }
</script>
