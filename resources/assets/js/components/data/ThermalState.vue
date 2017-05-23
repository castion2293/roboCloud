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
                    type: 'line',
                    data: {
                        labels: ["1am", "2am", "3am", "4am", "5am", "6am", "7am", "8am", "9am", "10am", "11am", "12am"],
                        datasets: [{
                            label: 'Robot Thermal State',
                            backgroundColor: 'rgba(255, 99, 132, 1)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            data: [
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
                                this.randomScalingFactor(),
                            ],
                            fill: false,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: true,
                            position: 'bottom',
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
            setInterval(this.updataData, 1000);
        },

        methods: {
            fetchData () {
                let ctx = this.$refs.canvas;
                this.myChart = new Chart(ctx, this.config);
                console.log('fetch');
            },
            updataData () {
                this.config.data.labels.shift();
                this.config.data.datasets[0].data.shift();
                this.config.data.labels.push('1pm');
                this.config.data.datasets[0].data.push(this.randomScalingFactor());
                this.myChart.update();
            },
            randomScalingFactor () {
                return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);

            },
        }
    }
</script>
