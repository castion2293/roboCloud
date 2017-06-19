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
                    type: 'line',
                    data: {
                        labels: Month_lable,
                        datasets: [{
                            label: '良品',
                            backgroundColor: 'rgba(76, 175, 80, 1)',
                            borderColor: 'rgba(76, 175, 80, 1)',
                            data: [
                                6877,
                                13457,
                                20004,
                                26713,
                                33318,
                                39995,
                                46307,
                                53007,
                                59624,
                                66218,
                                73898,
                                81219,
                            ],
                            fill: false,
                            borderWidth: 1
                        },
                            {
                                label: '不良品',
                                backgroundColor: 'rgba(121, 85, 72, 1)',
                                borderColor: 'rgba(121, 85, 72, 1)',
                                data: [
                                    1189,
                                    2277,
                                    3345,
                                    4509,
                                    5733,
                                    6819,
                                    7925,
                                    9145,
                                    10338,
                                    11488,
                                    13506,
                                    14798,
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
