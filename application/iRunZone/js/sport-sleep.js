$.ajax({
    url:"/sport/getSleepInfo",
    success:function (myData) {
        var jsonData = eval("("+myData+")");
        $("#sleep-complete").html(jsonData.complete+"%");
        $("#sleep-total").html(jsonData.total+"min");
        $("#sleep-light").html(jsonData.light+"min");
        $(function () {
            $('#sport-sleep-statistic').highcharts({
                title: {
                    text: '24小时睡眠情况统计',
                    x: -20 //center
                },
                xAxis: {
                    categories: ['00:00', '00:20', '00:40', '01:00', '01:20', '01:40',
                        '02:00', '02:20', '02:40', '03:00', '03:20', '03:40',
                        '04:00', '04:20', '04:40', '05:00', '05:20', '05:40',
                        '06:00', '06:20', '06:40', '07:00', '07:20', '07:40',
                        '08:00', '08:20', '08:40', '09:00', '09:20', '09:40',
                        '10:00', '10:20', '10:40', '11:00', '11:20', '11:40',
                        '12:00', '12:20', '12:40', '13:00', '13:20', '13:40',
                        '14:00', '14:20', '14:40', '15:00', '15:20', '15:40',
                        '16:00', '16:20', '16:40', '17:00', '17:20', '17:40',
                        '18:00', '18:20', '18:40', '19:00', '19:20', '19:40',
                        '20:00', '20:20', '20:40', '21:00', '21:20', '21:40',
                        '22:00', '22:20', '22:40', '23:00', '23:20', '23:40']
                },
                yAxis: {
                    title: {
                        text: '睡眠质量'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                series: [{
                    name: '睡眠质量',
                    data: jsonData.detail
                }]
            });
        });

    }
})
