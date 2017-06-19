<template>
    <div>
        <canvas ref="canvas" ></canvas>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                config: {
                    type: 'pie',
                    data: {
                        labels: ["良品", "不良品"],
                        datasets: [{
                            backgroundColor: [
                                'rgba(233, 30, 99, 1)',
                                'rgba(255, 235, 59, 1)',
                            ],
                            data: [
                                6877,
                                1189,
                            ],
                        }]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: true,
                            position: 'top',
                        },
                        hover: {
                            mode: 'point'
                        }
                    }
                },
                myChart: '',
            }
        },

        mounted() {
            this.fetchData();
        },

        methods: {
            fetchData () {
                let ctx = this.$refs.canvas;
                this.myChart = new Chart(ctx, this.config);
            },
        }
    }
</script>
