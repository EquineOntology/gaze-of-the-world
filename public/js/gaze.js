function createChart(country, data) {
    var jsonData = JSON.parse(data);

    var arrayData = [];
    Object.keys(jsonData).forEach(function (k) {
        arrayData.push([new Date(k).getTime(), jsonData[k]]);
    });

    arrayData.sort(function (a, b) {
        return b[0] - a[0];
    });

    var chartOptions = function(days = 7) {
        data = arrayData.slice(0, days);
        return {
            chart: {
                zoomType: 'x'
            },
            title: {
                text: 'Mentions in the past ' + days + ' days'
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
                data: arrayData.slice(0, days)
            }]
        };
    }

    var charts = [];

    // Charts don't fit in bootstrap modals. Reflowing the chart while the modal is
    // transitioning breaks the modal completely. What we do instead is to
    // check whether a modal is transitioning before firing the
    // $(window).on('resize') code.
    var modal = $('#' + country + 'Modal');

    var containers = [];
    containers['#' + country + '-7Days'] = $('#' + country + '-7Days-chart');
    containers['#' + country + '-30Days'] = $('#' + country + '-30Days-chart');
    containers['#' + country + '-90Days'] = $('#' + country + '-90Days-chart');
    containers['#' + country + '-150Days'] = $('#' + country + '-150Days-chart');

    // Tab events.
    modal.on('show.bs.tab', function (e) {
        containers[e.target.hash].css('visibility', 'hidden');
        modalIsTransitioning = true;
    });
    modal.on('shown.bs.tab', function (e) {
        if (!charts[e.target.hash]) {
            var days = parseInt(e.target.hash.replace(/^\D+/g, ''));
            charts[e.target.hash] = Highcharts.chart(e.target.hash.substr(1) + '-chart', chartOptions(days))
        }
        containers[e.target.hash].css('visibility', 'initial');
        charts[e.target.hash].reflow();
        modalIsTransitioning = false;
    });
    modal.on('hide.bs.tab', function () {
        modalIsTransitioning = true;
    });
    modal.on('hidden.bs.tab', function () {
        modalIsTransitioning = false;
    });

    // Modal events.
    modal.on('show.bs.modal', function () {
        containers['#' + country + '-7Days'].css('visibility', 'hidden');
        modalIsTransitioning = true;
    });
    modal.on('shown.bs.modal', function (e) {
        var key = '#' + country + '-7Days';
        if (!charts[key]) {
            charts[key] = Highcharts.chart(country + '-7Days-chart', chartOptions(7));
        }
        containers[key].css('visibility', 'initial');
        charts[key].reflow();
        modalIsTransitioning = false;
    });
    modal.on('hide.bs.modal', function () {
        modalIsTransitioning = true;
    });
    modal.on('hidden.bs.modal', function () {
        modalIsTransitioning = false;
    });

    $(window).on('resize', function () {
        if (modal.is(':visible')) {
            if (!modalIsTransitioning) {
                modal.modal('hide');
            }
        }
    });
};

var modalIsTransitioning = false;


