<template>
    <div class="ml-5 mt-3">
        <yield-data></yield-data>
    </div>
</template>

<script>
    import yieldData from '../data/YieldData.vue';

    export default {
        components: {
            'yield-data': yieldData,
        },
    }
</script>
