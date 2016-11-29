/**
 * Created by st0001 on 2016/11/28.
 */
$.ajax({
    url:"/sport/getBodyInfo",
    success:function (myData) {
        var jsonData = eval("("+myData+")");
        $(function () {
            $('#sport-body-weight').highcharts({
                title: {
                    text: '体重统计',
                    x: -20 //center
                },
                xAxis: {
                    categories: jsonData.date
                },
                yAxis: {
                    title: {
                        text: '体重 (kg)'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    valueSuffix: 'KG'
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                series: [{
                    name: '体重',
                    data: jsonData.weight
                }]
            });
        });

        $(function () {
            $('#sport-body-height').highcharts({
                title: {
                    text: '身高统计',
                    x: -20 //center
                },
                xAxis: {
                    categories: jsonData.date
                },
                yAxis: {
                    title: {
                        text: '身高 (cm)'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    valueSuffix: 'cm'
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                series: [{
                    name: '身高',
                    data: jsonData.height
                }]
            });
        });

    }
})
