<template>
    <div class="w3-container">
        <v-card>
            <div class="w3-bar grey lighten-2">
                <button class="w3-bar-item w3-button" :class="block.btnColor[0]" @click="toggleChart(0)"><b>單日產能</b></button>
                <button class="w3-bar-item w3-button" :class="block.btnColor[1]" @click="toggleChart(1)"><b>累計產能</b></button>
                <button class="w3-bar-item w3-button" :class="block.btnColor[2]" @click="toggleChart(2)"><b>圓餅圖</b></button>
            </div>

            <div v-show="block.show[0]">
                <v-card class="grey lighten-3">
                    <yield-data></yield-data>
                </v-card>
            </div>

            <div v-show="block.show[1]">
                <v-card class="grey lighten-3">
                    <yield-cumulate-data></yield-cumulate-data>
                </v-card>
            </div>

            <div v-show="block.show[2]">
                <v-card class="grey lighten-3" style="width:50%;">
                    <yield-pie-data></yield-pie-data>
                </v-card>
            </div>
        </v-card>
    </div>

</template>

<script>
    import yieldData from '../data/YieldData.vue';
    import yieldCumulateData from '../data/YieldCumulateData.vue';
    import yieldPieData from '../data/YieldPieData.vue';

    export default {
        components: {
            'yield-data': yieldData,
            'yield-cumulate-data': yieldCumulateData,
            'yield-pie-data': yieldPieData,
        },

        data () {
            return {
                block: {
                    show: [
                        true,
                        false,
                        false,
                    ],
                    btnColor: [
                        'grey lighten-3',
                        'grey lighten-2',
                        'grey lighten-2',
                    ]
                }
            }
        },

        methods: {
            toggleChart (seed) {

                for(let i = 0; i < this.block.show.length; i++) {
                    this.$set(this.block.show, i, false);
                    this.$set(this.block.btnColor, i, 'grey lighten-2');
                }

                this.$set(this.block.show, seed, true);
                this.$set(this.block.btnColor, seed, 'grey lighten-3');
            }
        }
    }
</script>
