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

        <robot-error-log-data></robot-error-log-data>

        <a href="/home/getPDF" ref="PDF_link" style="display:none;"></a>
    </div>
</template>

<script>
    import robotErrorLogData from '../data/RobotErrorLogData.vue';

    export default {
        components: {
            'robot-error-log-data': robotErrorLogData,
        },
        methods: {
            getPDF () {
                let PDF = this.$refs.PDF_link;
                PDF.click();
            }
        }
    }
</script>
