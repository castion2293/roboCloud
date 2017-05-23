<template>
    <div class="ml-5 mt-3">
        <thermal-state></thermal-state>
    </div>
</template>

<script>
    import thermalState from '../data/ThermalState.vue';

    export default {
        components: {
            'thermal-state': thermalState,
        },
    }
</script>
