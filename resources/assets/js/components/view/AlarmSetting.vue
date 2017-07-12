<template>
    <v-card class="grey lighten-3 elevation-0">
        <v-card-text>

                <v-layout row wrap>
                    <v-flex md12 class="pr-5">
                        <h6 class="w3-bottombar"><b>警報設定</b></h6>
                    </v-flex>

                    <v-flex md4>
                        <v-container fluid>
                            <v-layout row wrap>
                                <v-flex md9 style="display: flex;align-items: center;">
                                    <b>手臂異常代碼002類 電子郵件通知</b>
                                </v-flex>
                                <v-flex md3>
                                    <v-switch :label="(sw1_1)?`ON`:`OFF`" v-model="sw1_1" info dark hide-details></v-switch>
                                </v-flex>
                                <v-flex md9 style="display: flex;align-items: center;">
                                    <b>手臂異常代碼004類 電子郵件通知</b>
                                </v-flex>
                                <v-flex md3>
                                    <v-switch :label="(sw1_2)?`ON`:`OFF`" v-model="sw1_2" info dark hide-details></v-switch>
                                </v-flex>
                                <v-flex md9 style="display: flex;align-items: center;">
                                    <b>手臂異常代碼008類 電子郵件通知</b>
                                </v-flex>
                                <v-flex md3>
                                    <v-switch :label="(sw1_3)?`ON`:`OFF`" v-model="sw1_3" info dark hide-details></v-switch>
                                </v-flex>
                                <v-flex md9 style="display: flex;align-items: center;">
                                    <b>手臂異常代碼002類 手機簡訊通知</b>
                                </v-flex>
                                <v-flex md3>
                                    <v-switch :label="(sw1_4)?`ON`:`OFF`" v-model="sw1_4" info dark hide-details></v-switch>
                                </v-flex>
                                <v-flex md9 style="display: flex;align-items: center;">
                                    <b>手臂異常代碼004類 手機簡訊通知</b>
                                </v-flex>
                                <v-flex md3>
                                    <v-switch :label="(sw1_5)?`ON`:`OFF`" v-model="sw1_5" info dark hide-details></v-switch>
                                </v-flex>
                                <v-flex md9 style="display: flex;align-items: center;">
                                    <b>手臂異常代碼008類 手機簡訊通知</b>
                                </v-flex>
                                <v-flex md3>
                                    <v-switch :label="(sw1_6)?`ON`:`OFF`" v-model="sw1_6" info dark hide-details></v-switch>
                                </v-flex>
                            </v-layout>
                        </v-container>
                    </v-flex>

                    <v-flex md4 class="w3-border-left">
                        <v-container fluid>
                            <v-layout row wrap>
                                <v-flex md9 style="display: flex;align-items: center;">
                                    <b>循環異常錯誤警報 電子郵件通知</b>
                                </v-flex>
                                <v-flex md3>
                                    <v-switch :label="(sw2_1)?`ON`:`OFF`" v-model="sw2_1" info dark hide-details></v-switch>
                                </v-flex>
                                <v-flex md9 style="display: flex;align-items: center;">
                                    <b>循環異常錯誤警告 電子郵件通知</b>
                                </v-flex>
                                <v-flex md3>
                                    <v-switch :label="(sw2_2)?`ON`:`OFF`" v-model="sw2_2" info dark hide-details></v-switch>
                                </v-flex>
                                <v-flex md9 style="display: flex;align-items: center;">
                                    <b>循環異常錯誤警報 手機簡訊通知</b>
                                </v-flex>
                                <v-flex md3>
                                    <v-switch :label="(sw2_3)?`ON`:`OFF`" v-model="sw2_3" info dark hide-details></v-switch>
                                </v-flex>
                                <v-flex md9 style="display: flex;align-items: center;">
                                    <b>循環異常錯誤警告 手機簡訊通知</b>
                                </v-flex>
                                <v-flex md3>
                                    <v-switch :label="(sw2_4)?`ON`:`OFF`" v-model="sw2_4" info dark hide-details></v-switch>
                                </v-flex>
                            </v-layout>
                        </v-container>
                    </v-flex>

                    <v-flex md4 class="w3-border-left">
                        <v-container fluid>
                            <v-layout row wrap>
                                <v-flex md9 style="display: flex;align-items: center;">
                                    <b>手臂交握異常 電子郵件通知</b>
                                </v-flex>
                                <v-flex md3>
                                    <v-switch :label="(sw3_1)?`ON`:`OFF`" v-model="sw3_1" info dark hide-details></v-switch>
                                </v-flex>
                                <v-flex md9 style="display: flex;align-items: center;">
                                    <b>收集器通訊異常 電子郵件通知</b>
                                </v-flex>
                                <v-flex md3>
                                    <v-switch :label="(sw3_2)?`ON`:`OFF`" v-model="sw3_2" info dark hide-details></v-switch>
                                </v-flex>
                                <v-flex md9 style="display: flex;align-items: center;">
                                    <b>手臂交握異常 手機簡訊通知</b>
                                </v-flex>
                                <v-flex md3>
                                    <v-switch :label="(sw3_3)?`ON`:`OFF`" v-model="sw3_3" info dark hide-details></v-switch>
                                </v-flex>
                                <v-flex md9 style="display: flex;align-items: center;">
                                    <b>收集器通訊異常 手機簡訊通知</b>
                                </v-flex>
                                <v-flex md3>
                                    <v-switch :label="(sw3_4)?`ON`:`OFF`" v-model="sw3_4" info dark hide-details></v-switch>
                                </v-flex>
                            </v-layout>
                        </v-container>
                    </v-flex>

                </v-layout>
        </v-card-text>
    </v-card>
</template>

<script>
    export default {
        data () {
            return {
                sw1_1: true,
                sw1_2: true,
                sw1_3: true,
                sw1_4: false,
                sw1_5: false,
                sw1_6: false,
                sw2_1: true,
                sw2_2: true,
                sw2_3: false,
                sw2_4: false,
                sw3_1: true,
                sw3_2: true,
                sw3_3: false,
                sw3_4: false,
            }
        }
    }
</script>
