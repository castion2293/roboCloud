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
                        labels: [],
                        datasets: [{
                            label: '手臂扭力狀態',
                            backgroundColor: 'rgba(153, 102, 255, 1)',
                            borderColor: 'rgba(153, 102, 255, 1)',
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
                            position: 'top',
                        },
                        hover: {
                            mode: 'point'
                        }
                    }
                },
                myChart: '',
                min1: 0,
                min2: 0,
                sec1: 0,
                sec2: 0,
            }
        },

        mounted() {
            this.initialTime();
            this.fetchData();
            setInterval(this.updataData, 1000);
        },

        methods: {
            fetchData () {
                let ctx = this.$refs.canvas;
                this.myChart = new Chart(ctx, this.config);
            },
            updataData () {
                this.config.data.labels.shift();
                this.config.data.datasets[0].data.shift();
                this.config.data.labels.push(this.updateTime());
                this.config.data.datasets[0].data.push(this.randomScalingFactor());
                this.myChart.update();
            },
            randomScalingFactor () {
                return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);

            },
            initialTime() {
                for(let i = 0; i < 12; i++) {
                    if (i < 10)
                        this.sec2 = i;
                    else {
                        this.sec1 = 1;
                        this.sec2 = i - 10
                    }

                    this.config.data.labels.push(this.min1.toString() + this.min2.toString() + ':' + this.sec1.toString() + this.sec2.toString())
                }
            },
            updateTime() {
                if (++this.sec2 > 9) {
                    this.sec1++;
                    this.sec2 = 0;
                }

                if (this.sec1 > 5) {
                    this.min2++;
                    this.sec1 = 0;
                }

                if (this.min2 > 9) {
                    this.min1++;
                    this.min2 = 0;
                }

                if (this.min1 > 5) {
                    this.min1 = this.min2 = this.sec1 = this.sec2 = 0;
                }

                return this.min1.toString() + this.min2.toString() + ':' + this.sec1.toString() + this.sec2.toString()
            }
        }
    }
</script>
