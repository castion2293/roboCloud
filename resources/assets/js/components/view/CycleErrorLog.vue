<template>
    <div>
        <div class="text-xs-right mb-2 mr-1">
            <v-menu
                transition="v-slide-y-transition"
                bottom
            >
                <v-btn slot="activator" class="grey darken-1">
                    <v-icon light rihgt class="mr-2">cloud_download</v-icon>
                    <b class="w3-text-white" style="font-size:1.3em;">匯出</b>
                </v-btn>
                <v-list>
                    <v-list-item>
                        <div @click="getPDF">
                            <v-list-tile>
                                <v-list-tile-title>PDF</v-list-tile-title>
                            </v-list-tile>
                        </div>

                        <v-list-tile>
                            <v-list-tile-title>Excel</v-list-tile-title>
                        </v-list-tile>
                    </v-list-item>
                </v-list>
            </v-menu>
        </div>

        <cycle-error-log-data></cycle-error-log-data>

        <a :href="PDFUrl" ref="PDF_link" style="display:none;">here</a>
    </div>
</template>

<script>
    import cycleErrorLogData from '../data/CycleErrorLogData.vue';

    export default {
        components: {
            'cycle-error-log-data': cycleErrorLogData,
        },
        data () {
            return {
                PDFUrl : '/home/getPDF'
            }
        },
        methods: {
            getPDF () {
                let PDF = this.$refs.PDF_link;
                PDF.href = `${this.PDFUrl}?key=2`;
//                console.log(PDF);
                PDF.click();
            }
        }
    }
</script>
