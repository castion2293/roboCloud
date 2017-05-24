<template>
    <div>
        <div class="w3-row-padding">
            <div class="w3-col l6 m6 mt-2">
                <v-card class="grey lighten-3">
                    <thermal-state></thermal-state>
                </v-card>
            </div>
            <div class="w3-col l6 m6 mt-2">
                <v-card class="grey lighten-3">
                    <current-state></current-state>
                </v-card>
            </div>
        </div>
        <div class="w3-row-padding">
            <div class="w3-col l6 m6 mt-4">
                <v-card class="grey lighten-3">
                    <torque-state></torque-state>
                </v-card>
            </div>
            <div class="w3-col l6 m6 mt-4">
                <v-card class="grey lighten-3">
                    <vortage-state></vortage-state>
                </v-card>
            </div>
        </div>
    </div>
</template>

<script>
    import thermalState from '../data/ThermalState.vue';
    import CurrentState from '../data/CurrentState.vue';
    import TorqueState from '../data/TorqueState.vue';
    import VortageState from '../data/VortageState.vue';

    export default {
        components: {
            'thermal-state': thermalState,
            'current-state': CurrentState,
            'torque-state': TorqueState,
            'vortage-state': VortageState,
        },
    }
</script>
