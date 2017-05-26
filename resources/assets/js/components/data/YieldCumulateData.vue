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
                        labels: ["5月21日", "5月22日", "5月23日", "5月24日", "5月25日", "5月26日", "5月27日"],
                        datasets: [{
                            label: '良品',
                            backgroundColor: 'rgba(54, 162, 235, 1)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            data: [
                                240,
                                480,
                                690,
                                920,
                                1190,
                                1380,
                                1550,
                            ],
                            fill: false,
                            borderWidth: 1
                        },
                        {
                            label: '不良品',
                            backgroundColor: 'rgba(255, 206, 86, 1)',
                            borderColor: 'rgba(255, 206, 86, 1)',
                            data: [
                                15,
                                45,
                                93,
                                144,
                                167,
                                213,
                                299,
                            ],
                            fill: false,
                            borderWidth: 1
                        }
                        ]
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
