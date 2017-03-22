function createChart(country, data) {
    var jsonData = JSON.parse(data);

    var arrayData = [];
    Object.keys(jsonData).forEach(function (k) {
        arrayData.push([new Date(k).getTime(), jsonData[k]]);
    });

    arrayData.sort(function (a, b) {
        return a[0] - b[0];
    });

    var chart = Highcharts.chart(country + 'Chart', {
        chart: {
            zoomType: 'x'
        },
        title: {
            text: 'Mentions in the past days'
        },
        xAxis: {
            type: 'datetime',
            labelFormat: {
                value: '%d %m'
            }
        },
        yAxis: {
            title: {
                text: 'Mentions'
            },
            allowDecimals: false,
        },
        legend: {
            enabled: false
        },
        series: [{
            name: country,
            data: arrayData
        }]
    });

    // Charts don't fit in bootstrap modals. Reflowing the chart while the modal is
    // transitioning breaks the modal completely. What we do instead is to
    // check whether a modal is transitioning before firing the
    // $(window).on('resize') code.
    var modal = $('#' + country + 'Modal');
    var chartContainer = $('#' + country + 'Chart');

    modal.on('show.bs.modal', function () {
        chartContainer.css('visibility', 'hidden');
        modalIsTransitioning = true;
    });
    modal.on('shown.bs.modal', function () {
        chartContainer.css('visibility', 'initial');
        chart.reflow();
        modalIsTransitioning = false;
    });
    modal.on('hide.bs.modal', function (){
        modalIsTransitioning = true;
    })
    modal.on('hidden.bs.modal', function () {
        modalIsTransitioning = false;
    })

    $(window).on('resize', function () {
        if (modal.is(':visible')) {
            if (!modalIsTransitioning) {
                modal.modal('hide');
            }
        }
    });
};

var modalIsTransitioning = false;


