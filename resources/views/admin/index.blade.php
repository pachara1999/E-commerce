@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-cart-simple text-warning"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Order</p>
                                <p class="card-title">150
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-calendar-o"></i>
                        Today
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-money-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Income</p>
                                <p class="card-title">฿ 1,345
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-calendar-o"></i>
                        Yesterdy
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-money-coins text-danger"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Tax</p>
                                <p class="card-title">23
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-clock-o"></i>
                        In this year
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-favourite-28 text-primary"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Followers</p>
                                <p class="card-title">+45K
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-refresh"></i>
                        Update now
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header ">
                    <h5 class="card-title">The most product categories</h5>
                </div>
                <div class="card-body ">
                    <canvas id="chartCategories"></canvas>
                </div>
                <div class="card-footer ">
                    <div class="legend">
                        <i class="fa fa-circle text-primary"></i> Shirt
                        <i class="fa fa-circle text-warning"></i> Jeans
                        <i class="fa fa-circle text-danger"></i> Sweater
                        <i class="fa fa-circle text-secondary"></i> Shoes
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-chart h-100">
                <div class="card-header">
                    <h5 class="card-title">Yearly sales</h5>
                </div>
                <div class="card-body">
                    <canvas id="speedChart" width="400" height="200"></canvas>
                </div>
                <div class="card-footer">
                    <div class="chart-legend">
                        <i class="fa fa-circle text-info"></i> 2021
                        <i class="fa fa-circle text-warning"></i> 2022
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            ctx = document.getElementById('chartCategories').getContext("2d");

            myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: [1, 2, 3],
                    datasets: [{
                        label: "Categories",
                        pointRadius: 0,
                        pointHoverRadius: 0,
                        backgroundColor: [
                            '#e3e3e3',
                            '#4acccd',
                            '#fcc468',
                            '#ef8157'
                        ],
                        borderWidth: 0,
                        data: [342, 480, 530, 120]
                    }]
                },

                options: {

                    legend: {
                        display: false
                    },

                    pieceLabel: {
                        render: 'percentage',
                        fontColor: ['white'],
                        precision: 2
                    },

                    tooltips: {
                        enabled: false
                    },

                    scales: {
                        yAxes: [{

                            ticks: {
                                display: false
                            },
                            gridLines: {
                                drawBorder: false,
                                zeroLineColor: "transparent",
                                color: 'rgba(255,255,255,0.05)'
                            }

                        }],

                        xAxes: [{
                            barPercentage: 1.6,
                            gridLines: {
                                drawBorder: false,
                                color: 'rgba(255,255,255,0.1)',
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                display: false,
                            }
                        }]
                    },
                }
            });

            var speedCanvas = document.getElementById("speedChart");

            var dataFirst = {
                data: [0, 19, 15, 20, 30, 40, 40, 50, 25, 30, 50, 70],
                fill: false,
                borderColor: '#fbc658',
                backgroundColor: 'transparent',
                pointBorderColor: '#fbc658',
                pointRadius: 4,
                pointHoverRadius: 4,
                pointBorderWidth: 8,
            };

            var dataSecond = {
                data: [0, 5, 10, 12, 20, 27, 30, 34, 42, 45, 55, 63],
                fill: false,
                borderColor: '#51CACF',
                backgroundColor: 'transparent',
                pointBorderColor: '#51CACF',
                pointRadius: 4,
                pointHoverRadius: 4,
                pointBorderWidth: 8
            };

            var speedData = {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [dataFirst, dataSecond]
            };

            var chartOptions = {
                legend: {
                    display: false,
                    position: 'top'
                }
            };

            var lineChart = new Chart(speedCanvas, {
                type: 'line',
                hover: false,
                data: speedData,
                options: chartOptions
            });
        });
    </script>
@endsection
