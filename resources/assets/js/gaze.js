$(function () {
    var chart = Highcharts.chart('USChart', {
        title: 'United States mentions',
        xAxis: {
            type: 'datetime'
        },
        yAxis: {
            title: {
                text: 'mentions'
            }
        },
        legend: {
            enabled: false
        }
    });
});