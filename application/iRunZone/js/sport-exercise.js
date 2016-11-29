/**
 * 当天统计
 */
$(function () {
    Highcharts.setOptions({
        timezoneOffset: -8
    });
    $.getJSON('/sport/getTrackInfo', function (data) {
        $('#sport-exercise-track').highcharts({
            chart: {
                zoomType: 'x'
            },
            title: {
                text: '每20分钟运动距离统计图'
            },
            subtitle: {
                text: document.ontouchstart === undefined ?
                    '鼠标拖动可以进行缩放' : '手势操作进行缩放'
            },
            xAxis: {
                type: 'datetime',
                dateTimeLabelFormats: {
                    millisecond: '%H:%M:%S.%L',
                    second: '%H:%M:%S',
                    minute: '%H:%M',
                    hour: '%H:%M',
                    day: '%m-%d',
                    week: '%m-%d',
                    month: '%Y-%m',
                    year: '%Y'
                }
            },
            tooltip: {
                dateTimeLabelFormats: {
                    millisecond: '%H:%M:%S.%L',
                    second: '%H:%M:%S',
                    minute: '%H:%M',
                    hour: '%H:%M',
                    day: '%Y-%m-%d',
                    week: '%m-%d',
                    month: '%Y-%m',
                    year: '%Y'
                }
            },
            yAxis: {
                title: {
                    text: '运动距离(米)'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },
            series: [{
                type: 'area',
                name: '运动距离',
                data: data
            }]
        });
    });
});

/**
 * sport exercise statistic
 */
$(function () {
    $.ajax({
        url:"/sport/getExerciseInfo",
        method: "GET",
        success:function (myData) {
            var jsonData = eval("("+myData+")");
            exerciseData = jsonData;
            // The speed gauge
            $('#sport-exercise-statistic').highcharts({
                title: {
                    text: '运动步数和时间',
                    x: -20 //center
                },
                xAxis: {
                    categories: jsonData.date
                },
                yAxis: [{ // left y axis
                    title: {
                        text: null
                    }
                }, { // right y axis
                    opposite: true,
                    title: {
                        text: null
                    }
                }],
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                series: [{
                    name: '运动步数',
                    data: jsonData.steps,
                    yAxis: 0
                }, {
                    name: '运动时间',
                    data: jsonData.minutes,
                    yAxis: 1
                }]
            });

            var calories = jsonData.calories;
            /**
             * 运动量统计
             */
            $(function () {
                $('#sport-exercise-month').highcharts({
                    chart: {
                        type: 'heatmap',
                        marginTop: 40,
                        marginBottom: 80
                    },
                    title: {
                        text: '卡路里消耗统计'
                    },
                    colorAxis: {
                        min: 0,
                        minColor: '#FFFFFF',
                        maxColor: Highcharts.getOptions().colors[0]
                    },
                    legend: {
                        align: 'right',
                        layout: 'vertical',
                        margin: 0,
                        verticalAlign: 'top',
                        y: 25,
                        symbolHeight: 280
                    },
                    series: [{
                        name: '消耗卡路里',
                        borderWidth: 1,
                        data: [[0, 0, calories[0]], [0, 1, calories[1]], [0, 2, calories[2]], [0, 3, calories[3]], [0, 4, calories[4]], [1, 0, calories[5]], [1, 1, calories[6]], [1, 2, calories[7]], [1, 3, calories[8]], [1, 4, calories[9]], [2, 0, calories[10]], [2, 1, calories[11]], [2, 2, calories[12]], [2, 3, calories[13]], [2, 4, calories[14]], [3, 0, calories[15]], [3, 1, calories[0]], [3, 2, calories[1]], [3, 3, calories[2]], [3, 4, calories[3]],
                            [4, 0, calories[14]], [4, 1, calories[15]], [4, 2, calories[16]], [4, 3, calories[17]], [4, 4, calories[18]], [5, 0, calories[19]], [5, 1, calories[20]], [5, 2, calories[21]], [5, 3, calories[22]], [5, 4, calories[23]]],
                        dataLabels: {
                            enabled: true,
                            color: '#000000'
                        }
                    }]
                });
            });

        }
    });

});


