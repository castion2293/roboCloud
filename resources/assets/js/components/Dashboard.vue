<template>
    <v-app id="example-3" class="elevation-1" top-toolbar left-sidebar>
        <my-toolbar @toggle-sidebar="sidebar = !sidebar"></my-toolbar>
        <main>
            <my-sidebar :sidebar="sidebar"
                        @close-sidebar="sidebar = !sidebar">
            </my-sidebar>
            <v-content class="grey lighten-4">
                <v-container fluid>
                    <router-view></router-view>
                </v-container>
            </v-content>
        </main>
    </v-app>
</template>

<script>
    import toolbar from './Toolbar.vue';
    import sidebar from './Sidebar.vue';

    export default {
        components: {
            'my-toolbar': toolbar,
            'my-sidebar': sidebar
        },

        data () {
            return {
                sidebar: '',
            }
        },

        methods: {

        },

        mounted () {

        }
    }
</script>

