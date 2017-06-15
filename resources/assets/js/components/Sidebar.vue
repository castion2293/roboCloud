<template>
    <v-navigation-drawer class="grey darken-1" persistent light :mini-variant.sync="mini" v-model="drawer">
        <v-list class="pa-0">
            <v-list-item>
                <v-list-tile tag="div">
                    <v-list-tile-content>
                        <v-list-tile-title class="text-xs-center"><b class="w3-text-white">{{ product.name }}</b></v-list-tile-title>
                    </v-list-tile-content>
                    <v-list-tile-action>
                        <v-btn light icon @click.native.stop="mini = !mini">
                            <v-icon>chevron_left</v-icon>
                        </v-btn>
                    </v-list-tile-action>
                </v-list-tile>

                <v-list-tile-content>
                    <div class="ml-5 mt-2">
                        <img :src="product.product_img" style="height:10em;width:10em;"  />
                    </div>
                </v-list-tile-content>

            </v-list-item>
        </v-list>
        <v-list class="pt-0" dense>
            <v-divider></v-divider>
            <v-list-item>
                <router-link :to="specRoute" exact style="text-decoration: none;">
                    <v-list-tile ripple>
                        <v-list-tile-action>
                            <v-icon light>build</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                            <v-list-tile-title style="font-size: 1.5em;">
                                <b class="w3-text-white">規格</b>
                            </v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </router-link>

                <v-list-group>
                    <v-list-item slot="item">
                        <v-list-tile ripple>
                            <v-list-tile-action>
                                <v-icon light>lightbulb_outline</v-icon>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title style="font-size: 1.5em;">
                                    <b class="w3-text-white">狀態</b>
                                </v-list-tile-title>
                            </v-list-tile-content>
                            <v-list-tile-action>
                                <v-icon light>keyboard_arrow_down</v-icon>
                            </v-list-tile-action>
                        </v-list-tile>
                    </v-list-item>
                    <v-list-item>
                        <router-link to="/state" style="text-decoration: none;">
                            <v-list-tile ripple>
                                <v-list-tile-title>
                                    <b class="w3-text-white">手臂內部狀態</b>
                                </v-list-tile-title>
                            </v-list-tile>
                        </router-link>
                    </v-list-item>
                    <v-list-item>
                        <v-list-tile ripple>
                            <v-list-tile-title>
                                <b class="w3-text-white">手臂通訊狀態</b>
                            </v-list-tile-title>
                        </v-list-tile>
                    </v-list-item>
                    <v-list-item>
                        <v-list-tile ripple>
                            <v-list-tile-title>
                                <b class="w3-text-white">手臂保養狀態</b>
                            </v-list-tile-title>
                        </v-list-tile>
                    </v-list-item>
                </v-list-group>

                <v-list-group>
                    <v-list-item slot="item">
                        <v-list-tile ripple>
                            <v-list-tile-action>
                                <v-icon light>equalizer</v-icon>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title style="font-size: 1.5em;">
                                    <b class="w3-text-white">產能</b>
                                </v-list-tile-title>
                            </v-list-tile-content>
                            <v-list-tile-action>
                                <v-icon light>keyboard_arrow_down</v-icon>
                            </v-list-tile-action>
                        </v-list-tile>
                    </v-list-item>
                    <v-list-item>
                        <router-link to="/yield" style="text-decoration: none;">
                            <v-list-tile ripple>
                                <v-list-tile-title>
                                    <b class="w3-text-white">每週產能</b>
                                </v-list-tile-title>
                            </v-list-tile>
                        </router-link>
                    </v-list-item>
                    <v-list-item>
                        <v-list-tile ripple>
                            <v-list-tile-title>
                                <b class="w3-text-white">每月產能</b>
                            </v-list-tile-title>
                        </v-list-tile>
                    </v-list-item>
                </v-list-group>

                <v-list-group>
                    <v-list-item slot="item">
                        <v-list-tile ripple>
                            <v-list-tile-action>
                                <v-icon light>error_outline</v-icon>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title style="font-size: 1.5em;">
                                    <b class="w3-text-white">異常</b>
                                </v-list-tile-title>
                            </v-list-tile-content>
                            <v-list-tile-action>
                                <v-icon light>keyboard_arrow_down</v-icon>
                            </v-list-tile-action>
                        </v-list-tile>
                    </v-list-item>
                    <v-list-item>
                        <router-link to="" style="text-decoration: none;">
                            <v-list-tile ripple>
                                <v-list-tile-title>
                                    <b class="w3-text-white">手臂異常歷史</b>
                                </v-list-tile-title>
                            </v-list-tile>
                        </router-link>
                    </v-list-item>
                    <v-list-item>
                        <router-link to="" style="text-decoration: none;">
                            <v-list-tile ripple>
                                <v-list-tile-title>
                                    <b class="w3-text-white">循環異常歷史</b>
                                </v-list-tile-title>
                            </v-list-tile>
                        </router-link>
                    </v-list-item>
                    <v-list-item>
                        <router-link to="" style="text-decoration: none;">
                            <v-list-tile ripple>
                                <v-list-tile-title>
                                    <b class="w3-text-white">通訊異常歷史</b>
                                </v-list-tile-title>
                            </v-list-tile>
                        </router-link>
                    </v-list-item>
                </v-list-group>

                <v-list-group>
                    <v-list-item slot="item">
                        <v-list-tile ripple>
                            <v-list-tile-action>
                                <v-icon light>settings</v-icon>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title style="font-size: 1.5em;">
                                    <b class="w3-text-white">設定</b>
                                </v-list-tile-title>
                            </v-list-tile-content>
                            <v-list-tile-action>
                                <v-icon light>keyboard_arrow_down</v-icon>
                            </v-list-tile-action>
                        </v-list-tile>
                    </v-list-item>
                    <v-list-item>
                        <router-link to="/profile" style="text-decoration: none;">
                            <v-list-tile ripple>
                                <v-list-tile-title>
                                    <b class="w3-text-white">基本資料</b>
                                </v-list-tile-title>
                            </v-list-tile>
                        </router-link>
                    </v-list-item>
                    <v-list-item>
                        <router-link to="" style="text-decoration: none;">
                            <v-list-tile ripple>
                                <v-list-tile-title>
                                    <b class="w3-text-white">公司資料設定</b>
                                </v-list-tile-title>
                            </v-list-tile>
                        </router-link>
                    </v-list-item>
                    <v-list-item>
                        <router-link to="" style="text-decoration: none;">
                            <v-list-tile ripple>
                                <v-list-tile-title>
                                    <b class="w3-text-white">警報設定</b>
                                </v-list-tile-title>
                            </v-list-tile>
                        </router-link>
                    </v-list-item>
                    <v-list-item>
                        <router-link to="" style="text-decoration: none;">
                            <v-list-tile ripple>
                                <v-list-tile-title>
                                    <b class="w3-text-white">喜好設定</b>
                                </v-list-tile-title>
                            </v-list-tile>
                        </router-link>
                    </v-list-item>
                </v-list-group>

                <router-link to="" style="text-decoration: none;">
                    <v-list-tile ripple>
                        <v-list-tile-action>
                            <v-icon light>local_phone</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                            <v-list-tile-title style="font-size: 1.5em;">
                                <b class="w3-text-white">聯絡</b>
                            </v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </router-link>

            </v-list-item>
        </v-list>
    </v-navigation-drawer>
</template>

<script>
    export default {
        props: ['drawer'],

        data () {
            return {
                mini: false,
                product: [],
            }
        },

        mounted () {
            axios.get('/home/getFirstProduct')
                .then(response => {
                    this.product = response.data;

                    this.$router.push(`/spec/${this.product.id}`);
                });

            Event.listen('myProduct', (product) => {
                this.product = product;

                this.$router.push(`/spec/${this.product.id}`);
            });
        },

        methods: {

        },

        computed: {
            sidebarshow () {
                return true
            },
            specRoute () {
                return `/spec/${this.product.id}`
            }
        }
    }
</script>
