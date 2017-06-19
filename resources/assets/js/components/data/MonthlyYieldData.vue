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
                    type: 'bar',
                    data: {
                        labels: ["第一週", "第二週", "第三週", "第四週"],
                        datasets: [{
                            label: '良品',
                            backgroundColor: 'rgba(233, 30, 99, 0.8)',
                            borderColor: 'rgba(233, 30, 99, 1)',
                            data: [
                                this.randomScalingFactor() + 1400,
                                this.randomScalingFactor() + 1400,
                                this.randomScalingFactor() + 1400,
                                this.randomScalingFactor() + 1400,
                            ],
                            borderWidth: 1
                        },
                            {
                                label: '不良品',
                                backgroundColor: 'rgba(255, 235, 59, 0.8)',
                                borderColor: 'rgba(255, 235, 59, 1)',
                                data: [
                                    this.randomScalingFactor() + 300,
                                    this.randomScalingFactor() + 300,
                                    this.randomScalingFactor() + 300,
                                    this.randomScalingFactor() + 300,
                                ],
                                borderWidth: 1
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
                myChart: ''
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
