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
                    type: 'doughnut',
                    data: {
                        labels: ["良品", "不良品"],
                        datasets: [{
                            backgroundColor: [
                                'rgba(76, 175, 80, 1)',
                                'rgba(121, 85, 72, 1)',
                            ],
                            data: [
                                this.randomScalingFactor() + 6600,
                                this.randomScalingFactor() + 1100,
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
