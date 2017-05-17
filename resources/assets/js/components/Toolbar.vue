<template>
    <v-toolbar class="grey darken-2">
        <v-toolbar-side-icon class="hidden-lg-and-up" @click.native.stop="$emit('toggle-sidebar')"  />
        <v-toolbar-logo class="blue--text darken-1" style="font-family: Monda;font-size: 2em;">ROBOTECH CLOUD</v-toolbar-logo>
    </v-toolbar>
</template>

<script>
    export default {

    }
</script>
