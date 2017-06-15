<template>
    <v-app>
        <my-sidebar :drawer="drawer"></my-sidebar>
        <my-toolbar @toggle-sidebar="drawer = !drawer"></my-toolbar>
        <main class="grey lighten-1" style="height: 200vh;">
            <v-container fluid>
                <router-view></router-view>
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
            }
        },
        methods: {

        },
        mounted () {

        }
    }
</script>

