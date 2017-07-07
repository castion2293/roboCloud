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
                                <b>第一週</b>
                            </div>
                        </v-flex>
                        <v-flex md3 class="container pl-3 pr-3">
                            <yield-pie-data></yield-pie-data>
                            <div class="text-xs-center mt-1 grey--text darken-2">
                                <b>第二週</b>
                            </div>
                        </v-flex>
                        <v-flex md3 class="container pl-3 pr-3">
                            <yield-pie-data></yield-pie-data>
                            <div class="text-xs-center mt-1 grey--text darken-2">
                                <b>第三週</b>
                            </div>
                        </v-flex>
                        <v-flex md3 class="container pl-3 pr-3">
                            <yield-pie-data></yield-pie-data>
                            <div class="text-xs-center mt-1 grey--text darken-2">
                                <b>第四週</b>
                            </div>
                        </v-flex>
                    </v-layout>
                </v-card>
            </v-tabs-content>
        </v-tabs>
    </v-card>
</template>

<script>
    import yieldData from '../data/MonthlyYieldData.vue';
    import yieldCumulateData from '../data/MonthlyYieldCumulateData.vue';
    import yieldPieData from '../data/MonthlyYieldPieData.vue';

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
