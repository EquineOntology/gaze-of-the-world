//noinspection ES6ModulesDependencies
var cached = [];
var timeframes = [7, 30, 90, 150];

function getData(country, days) {
    $.get('/v1/' + country + '/' + days, function (data) {
        cached[country] = data;
    });
}

function createModal(countryName, countryData) {
    var html = '<div class="modal fade" id="countryModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">';
    html += '<div class="modal-dialog modal-lg" role="document">';
    html += '<div class="modal-content">';
    html += '<div class="modal-header">';
    html += '<h5 class="modal-title" id="modalLabel">' + countryName + '</h5>';
    html += '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
    html += '<span aria-hidden="true">&times;</span>';
    html += '</button></div>';
    html += '<div class="modal-body">';
    html += '<ul class="nav nav-tabs" role="tablist">';
    timeframes.forEach(function (totalDays) {
        html += '<li class="nav-item">';
        html += '<a class="nav-link' + (totalDays === 7 ? ' active' : '') + '" data-toggle="tab" href="#' + countryName + '-' + totalDays + 'Days" role="tab">';
        html += totalDays + ' days';
        html += '</a></li>'
    });
    html += '</ul>';
    html += '<div class="tab-content">';
    timeframes.forEach(function (totalDays) {
        var identifier = countryName + '-' + totalDays;
        html += '<div id="' + identifier + 'Days" class="tab-pane' + (totalDays === 7? ' active' : ' fade in') + '" role="tabpanel">';
        html += '<div id="' + identifier + 'Days-chart"></div>';
        html += '<div class="text-center">';
        html += '<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#' + identifier + 'Days-collapse" aria-expanded="false" aria-controls="' + identifier + 'Days-collapse" >'
        html += 'Show raw values';
        html += '</button></div>';
        html += '<div class="collapse" id="' + identifier + 'Days-collapse">';
        html += '<div class="container col-8">';
        html += '<table><thead><tr>';
        html += '<th class="col-8">Day</th>';
        html += '<th class="col-4">Mentions</th>';
        html += '</tr></thead><tbody>';
        countryData.slice(0, totalDays).forEach(function (day) {
            html += '<tr>';
            html += '<td class="col-8">' + day['date'] + '</td>';
            html += '<td class="col-4">' + day[countryName] + '</td>';
            html += '</tr>';
        });
        html += '</tbody></table></div></div></div>';
    });
    html += '</div></div></div></div></div>';

    $('body').append(html);
}

function createChart(country, rawData) {
    var arrayData = [];
    for (var i = 0; i < rawData.length; i++) {
        arrayData.push([new Date(rawData[i].date).getTime(), rawData[i][country]]);
    }

    arrayData.sort(function (a, b) {
        return b[0] - a[0];
    });

    var chartOptions = function (days) {
        var data = arrayData.slice(0, days);

        return {
            chart: {
                type: 'scatter',
                zoomType: 'x'
            },
            plotOptions: {
                scatter: {
                    lineWidth: 1
                }
            },
            title: {
                text: ''
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
                allowDecimals: false
            },
            legend: {
                enabled: false
            },
            series: [{
                name: country,
                data: data
            }]
        };
    };

    var charts = [];

    // Charts don't fit in bootstrap modals. Reflowing the chart while the modal is
    // transitioning breaks the modal completely. What we do instead is to
    // check whether a modal is transitioning before firing the
    // $(window).on('resize') code.
    var modal = $('#countryModal');

    var containers = [];
    timeframes.forEach(function(days){
        containers['#' + country + '-' + days + 'Days'] = $('#' + country + '-' + days + 'Days-chart');
    });

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
    modal.on('shown.bs.modal', function () {
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
        $('#countryModal').remove();
    });

    $(window).on('resize', function () {
        if (modal.is(':visible')) {
            if (!modalIsTransitioning) {
                modal.modal('hide');
            }
        }
    });
}

var modalIsTransitioning = false;

function displayCountryModal(country) {
    // If we already have the data in memory we don't want to request it.
    if (cached[country]) {
        createModal(country, cached[country]);
    } else {
        $.get('/v1/' + country + '/' + 150, function (data) {
            cached[country] = data;
            createModal(country, data);
            $('#countryModal').modal();
            createChart(country, cached[country]);
        });
    }

    $('#countryModal').on('show.bs.modal', function (event) {
        createChart(country, cached[country]);
    });
}


