<template>
    <div class="w3-container">
        <v-card>
            <div class="w3-bar grey lighten-2">
                <button class="w3-bar-item w3-button" :class="btnDayColor" @click="toggleChart('day')"><b>單日產能</b></button>
                <button class="w3-bar-item w3-button" :class="btnWeekColor" @click="toggleChart('week')"><b>累計產能</b></button>
            </div>

            <div v-show="day">
                <v-card class="grey lighten-3">
                    <yield-data></yield-data>
                </v-card>
            </div>

            <div v-show="week">
                <v-card class="grey lighten-3">
                    <yield-cumulate-data></yield-cumulate-data>
                </v-card>
            </div>
        </v-card>
    </div>

</template>

<script>
    import yieldData from '../data/YieldData.vue';
    import yieldCumulateData from '../data/YieldCumulateData.vue';

    export default {
        components: {
            'yield-data': yieldData,
            'yield-cumulate-data': yieldCumulateData,
        },

        data () {
            return {
                day: true,
                week: false,
                btnDayColor: 'grey lighten-3',
                btnWeekColor: 'grey lighten-2',
            }
        },

        methods: {
            toggleChart (seed) {
                if (seed === 'day') {
                    this.day = true;
                    this.week = false;
                    this.btnDayColor = 'grey lighten-3';
                    this.btnWeekColor = 'grey lighten-2';
                } else if (seed === 'week') {
                    this.day = false;
                    this.week = true;
                    this.btnDayColor = 'grey lighten-2';
                    this.btnWeekColor = 'grey lighten-3';
                }
            }
        }
    }
</script>
