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
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                            ],
                            data: [
                                990,
                                100,
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
        }
    }
</script>
