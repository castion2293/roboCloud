<template>
    <v-sidebar class="grey darken-1" v-model="sidebarshow" height="auto">
        <div class="hidden-lg-and-up text-xs-right">
            <v-btn icon="icon" @click.native.stop="$emit('close-sidebar')">
                <v-icon>clear</v-icon>
            </v-btn>
        </div>
        <v-list dense>
            <!--<template v-for="(item,i) in itemGroup">-->
                <!--<v-list-group v-if="item.items">-->
                    <!--<v-list-item slot="item">-->
                        <!--<v-list-tile ripple>-->
                            <!--<v-list-tile-title v-text="item.title" />-->
                            <!--<v-list-tile-action>-->
                                <!--<v-icon>keyboard_arrow_down</v-icon>-->
                            <!--</v-list-tile-action>-->
                        <!--</v-list-tile>-->
                    <!--</v-list-item>-->
                    <!--<v-list-item v-for="(subItem,i) in item.items" :key="i">-->
                        <!--<v-list-tile ripple>-->
                            <!--<v-list-tile-title v-text="subItem.title" />-->
                        <!--</v-list-tile>-->
                    <!--</v-list-item>-->
                <!--</v-list-group>-->
                <!--<v-subheader v-else-if="item.header" v-text="item.header" />-->
                <!--<v-divider v-else-if="item.divider" light />-->
                <!--<v-list-item v-else>-->
                    <!--<v-list-tile ripple>-->
                        <!--<v-list-tile-title v-text="item.title" />-->
                    <!--</v-list-tile>-->
                <!--</v-list-item>-->
            <!--</template>-->

            <!--<v-list-group>-->
                <!--<v-list-item slot="item">-->
                    <!--<v-list-tile ripple>-->
                        <!--<v-list-tile-title v-text="'products'" />-->
                        <!--<v-list-tile-action>-->
                            <!--<v-icon>keyboard_arrow_down</v-icon>-->
                        <!--</v-list-tile-action>-->
                    <!--</v-list-tile>-->
                <!--</v-list-item>-->
                <!--<v-list-item v-for="(product,i) in products" :key="i">-->
                    <!--<v-list-tile ripple>-->
                        <!--<v-list-tile-title v-text="product.name" />-->
                    <!--</v-list-tile>-->
                <!--</v-list-item>-->
            <!--</v-list-group>-->

            <v-list-item>
                <div class="grey darken-1 text-xs-center mt-3">
                    <img :src="product.product_img" style="height:10em;width:10em;"  />
                    <p class="text-xs-center mt-2 pb-2 w3-text-white"><b>{{ product.name }}</b></p>
                </div>

                <v-divider light />

                <router-link to="/about" exact style="text-decoration: none;">
                    <v-list-tile ripple>
                        <v-icon class="ml-2">build</v-icon>
                        <v-list-tile-title class="ml-2" style="font-size: 1.5em;">
                            <b>規格</b>
                        </v-list-tile-title>
                    </v-list-tile>
                </router-link>

                <v-list-group>
                    <v-list-item slot="item">
                        <v-list-tile ripple>
                            <v-icon class="ml-2">lightbulb_outline</v-icon>
                            <v-list-tile-title class="ml-2" style="font-size: 1.5em;">
                                <b>狀態</b>
                            </v-list-tile-title>
                            <v-list-tile-action>
                                <v-icon>keyboard_arrow_down</v-icon>
                            </v-list-tile-action>
                        </v-list-tile>
                    </v-list-item>
                    <v-list-item>
                        <router-link to="/state" style="text-decoration: none;">
                            <v-list-tile ripple>
                                <v-list-tile-title>
                                    <b>手臂內部狀態</b>
                                </v-list-tile-title>
                            </v-list-tile>
                        </router-link>
                    </v-list-item>
                    <v-list-item>
                        <v-list-tile ripple>
                            <v-list-tile-title>
                                <b>狀態2</b>
                            </v-list-tile-title>
                        </v-list-tile>
                    </v-list-item>
                    <v-list-item>
                        <v-list-tile ripple>
                            <v-list-tile-title>
                                <b>狀態3</b>
                            </v-list-tile-title>
                        </v-list-tile>
                    </v-list-item>
                </v-list-group>

                <v-list-group>
                    <v-list-item slot="item">
                        <v-list-tile ripple>
                            <v-icon class="ml-2">equalizer</v-icon>
                            <v-list-tile-title class="ml-2" style="font-size: 1.5em;">
                                <b>產能</b>
                            </v-list-tile-title>
                            <v-list-tile-action>
                                <v-icon>keyboard_arrow_down</v-icon>
                            </v-list-tile-action>
                        </v-list-tile>
                    </v-list-item>
                    <v-list-item>
                        <router-link to="/yield" style="text-decoration: none;">
                            <v-list-tile ripple>
                                <v-list-tile-title>
                                    <b>每週產能</b>
                                </v-list-tile-title>
                            </v-list-tile>
                        </router-link>
                    </v-list-item>
                    <v-list-item>
                        <v-list-tile ripple>
                            <v-list-tile-title>
                                <b>每月產能</b>
                            </v-list-tile-title>
                        </v-list-tile>
                    </v-list-item>
                </v-list-group>

                <router-link to="" style="text-decoration: none;">
                    <v-list-tile ripple>
                        <v-icon class="ml-2">settings</v-icon>
                        <v-list-tile-title class="ml-2" style="font-size: 1.5em;">
                            <b>設定</b>
                        </v-list-tile-title>
                    </v-list-tile>
                </router-link>
                <router-link to="" style="text-decoration: none;">
                    <v-list-tile ripple>
                        <v-icon class="ml-2">local_phone</v-icon>
                        <v-list-tile-title class="ml-2" style="font-size: 1.5em;">
                            <b>聯絡</b>
                        </v-list-tile-title>
                    </v-list-tile>
                </router-link>
            </v-list-item>

        </v-list>
    </v-sidebar>
</template>

<script>
    export default {
        props: ['sidebar'],

        data () {
            return {
//                itemGroup: [
//                    { header: 'Header' },
//                    {
//                        title: 'Parent',
//                        group: '/company',
//                        items: [
//                            { title: 'Child' },
//                            { title: 'Child' },
//                            { title: 'Child' }
//                        ]
//                    },
//                    { title: 'Link' },
//                    { title: 'Link' },
//                    { divider: true },
//                    { header: 'Another Header' },
//                    { title: 'Link' }
//                ],
                product: [],
            }
        },

        mounted () {
            axios.get('/home/getFirstProduct')
                .then(response => {
                    this.product = response.data;
                });

            Event.listen('myProduct', (product) => this.product = product);
        },

        created() {
            this.$on('myProduct', );
        },

        methods: {
            setSelectedClient(product) {
                console.log(product);
            },
        },

        computed: {
            sidebarshow () {
                return this.sidebar
            }
        }
    }
</script>
