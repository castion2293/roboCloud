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
                                this.randomScalingFactor() + 1400,
                                this.randomScalingFactor() + 300,
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
            randomScalingFactor () {
                return Math.abs((Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100));
            },
        }
    }
</script>
