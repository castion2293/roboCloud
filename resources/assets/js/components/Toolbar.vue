<template>
    <v-toolbar fixed class="grey darken-2">
        <v-toolbar-side-icon light @click.native.stop="$emit('toggle-sidebar')"></v-toolbar-side-icon>
        <v-toolbar-title class="blue--text darken-1" style="font-family: Monda;font-size: 2em;">ROBOTECH CLOUD</v-toolbar-title>
        <v-spacer></v-spacer>

        <v-list-tile>
            <v-list-tile-content>
                <v-list-tile-title class="w3-text-white">產品</v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
        <v-menu bottom left offset-y origin="top right" max-height="auto" transition="v-slide-y-transition" class="mr-4">
            <v-btn icon slot="activator">
                <v-icon class="w3-text-white">keyboard_arrow_down</v-icon>
            </v-btn>
            <v-list>
                <v-list-item>
                    <div v-for="product in user.products" @click="getProduct(product)">
                        <v-list-tile>
                            <v-list-tile-title>{{ product.name }}</v-list-tile-title>
                        </v-list-tile>
                    </div>
                </v-list-item>
            </v-list>
        </v-menu>

        <v-list-tile avatar>
            <v-list-tile-avatar>
                <img :src="user.user_profile_img" />
            </v-list-tile-avatar>
            <v-list-tile-content>
                <v-list-tile-title class="w3-text-white">{{ user.name }}</v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
        <v-menu bottom left offset-y origin="top right" max-height="auto" transition="v-slide-y-transition">
            <v-btn icon slot="activator">
                <v-icon class="w3-text-white">keyboard_arrow_down</v-icon>
            </v-btn>
            <v-list class="pt-0">
                <v-list-item>
                    <div class="grey darken-1" style="width:12em;">
                        <v-list-tile-avatar class="pt-3 mb-3">
                            <img :src="user.user_profile_img" style="height:6em;width:6em;"  />
                        </v-list-tile-avatar>
                        <p class="text-xs-center pb-2 w3-text-white"><b>{{ user.name }}</b></p>
                    </div>
                    <router-link to="/profile" style="text-decoration: none;">
                        <v-list-tile>
                            <v-icon right>person</v-icon>
                            <v-list-tile-title class="ml-1"><b>基本資料</b></v-list-tile-title>
                        </v-list-tile>
                    </router-link>
                    <router-link to="/alarm_setting" style="text-decoration: none;">
                        <v-list-tile>
                            <v-icon right>notifications</v-icon>
                            <v-list-tile-title class="ml-1"><b>警報設定</b></v-list-tile-title>
                        </v-list-tile>
                    </router-link>
                    <router-link to="/" style="text-decoration: none;">
                        <v-list-tile>
                            <v-icon right>card_giftcard</v-icon>
                            <v-list-tile-title class="ml-1"><b>喜好設定</b></v-list-tile-title>
                        </v-list-tile>
                    </router-link>

                    <v-divider dark />

                    <div @click="logout">
                        <v-list-tile>
                            <v-icon right>keyboard_tab</v-icon>
                            <v-list-tile-title class="ml-1"><b>登出</b></v-list-tile-title>
                        </v-list-tile>
                    </div>
                </v-list-item>
            </v-list>
        </v-menu>

        <a href="/auth/logout" ref="logout_link" style="display:none;"></a>

    </v-toolbar>
</template>

<script>
    export default {
        data () {
            return {
                user: []
            }
        },

        mounted () {
            axios.get('home/getCurrentUser')
                .then(response => {
                    this.user = response.data;
                });
        },

        methods: {
            logout () {
                let logout = this.$refs.logout_link;
                logout.click();
            },
            getProduct (product) {
                Event.fire('myProduct', product);
            }
        }
    }
</script>
