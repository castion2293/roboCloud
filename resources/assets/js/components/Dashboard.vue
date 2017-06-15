<template>
    <!--<v-app id="example-3" class="elevation-1" top-toolbar left-sidebar>-->
        <!--<my-toolbar @toggle-sidebar="sidebar = !sidebar"></my-toolbar>-->
        <!--<main>-->
            <!--<my-sidebar :sidebar="sidebar"-->
                        <!--@close-sidebar="sidebar = !sidebar">-->
            <!--</my-sidebar>-->

                <!--<v-container fluid>-->
                    <!--<router-view></router-view>-->
                <!--</v-container>-->

        <!--</main>-->
    <!--</v-app>-->

    <v-app>
        <my-sidebar :drawer="drawer"></my-sidebar>

        <my-toolbar @toggle-sidebar="drawer = !drawer"></my-toolbar>

        <main class="grey lighten-1" style="height: 200vh;">
            <v-container fluid>
                <router-view></router-view>
                <!--<div class="title">Click on sidebar to re-open.</div>-->
                <!--<div class="title">Click on sidebar to re-open.</div>-->
            </v-container>
        </main>
    </v-app>
</template>

<script>
    import toolbar from './Toolbar.vue';
    import sidebar from './Sidebar.vue';
    import MyToolbar from "./Toolbar";
    import MySidebar from "./Sidebar";

    export default {
        components: {
            MySidebar,
            MyToolbar,
            'my-toolbar': toolbar,
            'my-sidebar': sidebar
        },

        data () {
            return {
                drawer: true,
                right: null
            }
        },

        methods: {

        },

        mounted () {

        }
    }
</script>

