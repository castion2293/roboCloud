<template>
    <v-card>
        <v-tabs grow light>
            <v-tabs-bar slot="activators">
                <v-tabs-slider></v-tabs-slider>
                <v-tabs-item :href="'#mobile-tabs-3-1'">
                    <b>單週產能</b>
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
                <v-card flat class="grey lighten-4" style="width:50%;">
                    <v-card-text>
                        <yield-pie-data></yield-pie-data>
                    </v-card-text>
                </v-card>
            </v-tabs-content>
        </v-tabs>
    </v-card>
</template>

<script>
    import yieldData from '../data/WeeklyYieldData.vue';
    import yieldCumulateData from '../data/WeeklyYieldCumulateData.vue';
    import yieldPieData from '../data/WeeklyYieldPieData.vue';

    export default {
        components: {
            'yield-data': yieldData,
            'yield-cumulate-data': yieldCumulateData,
            'yield-pie-data': yieldPieData,
        },

        data () {
            return {
//                block: {
//                    show: [
//                        true,
//                        false,
//                        false,
//                    ],
//                    btnColor: [
//                        'grey lighten-3',
//                        'grey lighten-2',
//                        'grey lighten-2',
//                    ]
//                }
            }
        },

        methods: {
//            toggleChart (seed) {
//
//                for(let i = 0; i < this.block.show.length; i++) {
//                    this.$set(this.block.show, i, false);
//                    this.$set(this.block.btnColor, i, 'grey lighten-2');
//                }
//
//                this.$set(this.block.show, seed, true);
//                this.$set(this.block.btnColor, seed, 'grey lighten-3');
//            }
        }
    }
</script>
