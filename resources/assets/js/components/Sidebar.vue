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

            <v-list-group>
                <v-list-item slot="item">
                    <v-list-tile ripple>
                        <v-list-tile-title v-text="'products'" />
                        <v-list-tile-action>
                            <v-icon>keyboard_arrow_down</v-icon>
                        </v-list-tile-action>
                    </v-list-tile>
                </v-list-item>
                <v-list-item v-for="(product,i) in products" :key="i">
                    <v-list-tile ripple>
                        <v-list-tile-title v-text="product.name" />
                    </v-list-tile>
                </v-list-item>
            </v-list-group>

            <v-list-item>
                <router-link to="/about" exact style="text-decoration: none;">
                    <v-list-tile ripple>
                        <v-list-tile-title>
                            About
                        </v-list-tile-title>
                    </v-list-tile>
                </router-link>
                <router-link to="/contact" style="text-decoration: none;">
                    <v-list-tile ripple>
                        <v-list-tile-title>
                            Contact
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
                itemGroup: [
                    { header: 'Header' },
                    {
                        title: 'Parent',
                        group: '/company',
                        items: [
                            { title: 'Child' },
                            { title: 'Child' },
                            { title: 'Child' }
                        ]
                    },
                    { title: 'Link' },
                    { title: 'Link' },
                    { divider: true },
                    { header: 'Another Header' },
                    { title: 'Link' }
                ],
                products: [],
            }
        },

        mounted () {
            axios.get('/home/getProducts')
                .then(response => {
                    this.products = response.data;
                    console.log(this.products);
                });
        },

        computed: {
            sidebarshow () {
                return this.sidebar
            }
        }
    }
</script>
