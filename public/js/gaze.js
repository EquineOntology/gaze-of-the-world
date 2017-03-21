function createChart(country, data) {
    console.log(JSON.parse(data));
    var myChart = Highcharts.chart(country + 'Chart', {
        title: {
            text: 'Mentions in the past days'
        },
        xAxis: {
            categories: ['Apples', 'Bananas', 'Oranges']
        },
        yAxis: {
            title: {
                text: 'Fruit eaten'
            }
        },
        series: {
            type: 'line',
            connectNulls: true,
            data: data
        }
    });
    // var chart = Highcharts.chart('USChart', {
    //     title: 'United States mentions',
    //     xAxis: {
    //         type: 'datetime'
    //     },
    //     yAxis: {
    //         title: {
    //             text: 'mentions'
    //         }
    //     },
    //     legend: {
    //         enabled: false
    //     }
    // });
};