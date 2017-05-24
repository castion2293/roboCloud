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
                        labels: ["5月21日", "5月22日", "5月23日", "5月24日", "5月25日", "5月26日", "5月27日"],
                        datasets: [{
                            label: '良品',
                            backgroundColor: 'rgba(54, 162, 235, 0.4)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            data: [
                                this.randomScalingFactor() + 200,
                                this.randomScalingFactor() + 200,
                                this.randomScalingFactor() + 200,
                                this.randomScalingFactor() + 200,
                                this.randomScalingFactor() + 200,
                                this.randomScalingFactor() + 200,
                                this.randomScalingFactor() + 200,
                            ],
                            borderWidth: 1
                        },
                        {
                            label: '不良品',
                            backgroundColor: 'rgba(255, 206, 86, 0.4)',
                            borderColor: 'rgba(255, 206, 86, 1)',
                            data: [
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
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
            //setInterval(this.updataData, 1000);
        },

        methods: {
            fetchData () {
                let ctx = this.$refs.canvas;
                this.myChart = new Chart(ctx, this.config);
            },
//            updataData () {
//                this.config.data.labels.shift();
//                this.config.data.datasets[0].data.shift();
//                this.config.data.labels.push('1pm');
//                this.config.data.datasets[0].data.push(this.randomScalingFactor());
//                this.myChart.update();
//            },
            randomScalingFactor () {
                return Math.abs((Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100));
            },
        }
    }
</script>
