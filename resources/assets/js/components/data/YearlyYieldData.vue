<template>
    <div>
        <canvas ref="canvas" ></canvas>
    </div>
</template>

<script>
    const Month_lable = ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"];

    export default {
        data () {
            return {
                config: {
                    type: 'bar',
                    data: {
                        labels: Month_lable,
                        datasets: [{
                            label: '良品',
                            backgroundColor: 'rgba(76, 175, 80, 0.8)',
                            borderColor: 'rgba(76, 175, 80, 1)',
                            data: [
                                this.randomScalingFactor() + 6600,
                                this.randomScalingFactor() + 6600,
                                this.randomScalingFactor() + 6600,
                                this.randomScalingFactor() + 6600,
                                this.randomScalingFactor() + 6600,
                                this.randomScalingFactor() + 6600,
                                this.randomScalingFactor() + 6600,
                                this.randomScalingFactor() + 6600,
                                this.randomScalingFactor() + 6600,
                                this.randomScalingFactor() + 6600,
                                this.randomScalingFactor() + 6600,
                                this.randomScalingFactor() + 6600,
                            ],
                            borderWidth: 1
                        },
                            {
                                label: '不良品',
                                backgroundColor: 'rgba(121, 85, 72, 0.8)',
                                borderColor: 'rgba(121, 85, 72, 1)',
                                data: [
                                    this.randomScalingFactor() + 1100,
                                    this.randomScalingFactor() + 1100,
                                    this.randomScalingFactor() + 1100,
                                    this.randomScalingFactor() + 1100,
                                    this.randomScalingFactor() + 1100,
                                    this.randomScalingFactor() + 1100,
                                    this.randomScalingFactor() + 1100,
                                    this.randomScalingFactor() + 1100,
                                    this.randomScalingFactor() + 1100,
                                    this.randomScalingFactor() + 1100,
                                    this.randomScalingFactor() + 1100,
                                    this.randomScalingFactor() + 1100,
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
