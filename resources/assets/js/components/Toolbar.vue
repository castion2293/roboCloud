<template>
    <v-toolbar>
        <v-toolbar-side-icon class="hidden-lg-and-up" @click.native.stop="$emit('toggle-sidebar')"  />
        <v-toolbar-logo class="text-xs-right">Logo</v-toolbar-logo>
    </v-toolbar>
</template>

<script>
    export default {

    }
</script>
