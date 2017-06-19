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
                        labels: ["第一週", "第二週", "第三週", "第四週"],
                        datasets: [{
                            label: '良品',
                            backgroundColor: 'rgba(233, 30, 99, 1)',
                            borderColor: 'rgba(233, 30, 99, 1)',
                            data: [
                                1550,
                                2950,
                                4569,
                                6877,
                            ],
                            fill: false,
                            borderWidth: 1
                        },
                            {
                                label: '不良品',
                                backgroundColor: 'rgba(255, 235, 59, 1)',
                                borderColor: 'rgba(255, 235, 59, 1)',
                                data: [
                                    299,
                                    598,
                                    877,
                                    1189,
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
