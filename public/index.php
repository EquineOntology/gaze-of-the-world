<?php

use ChristianFratta\GazeOfTheWorld\App;

require("../vendor/autoload.php");

App::loadEnv();

//App::assimilateFeeds();

App::retrieveInformation('today');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaze of the World</title>

    <link rel="icon" type="image/png" href="../favicon.png">

    <!-- Semantic UI -->
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/semantic.min.js"></script>
</head>
<body>
<button onclick="requestData()">Press</button>
<script type="text/javascript">
    function requestData() {
        $.ajax({
            type: 'POST',
            url: 'endpoint.php',
            data: {
                getCurrentInfo: true
            },
            success: function (response) {
                var data = $.parseJSON(response)[0];

                data = sortObjectToArray(data);

                createGrid(data);
            }
        });
    }

    function sortObjectToArray(obj) {
        var tmp  = [];
        for (var country in obj) {
            tmp.push([country, obj[country]]);
        }

        tmp.sort(function(a, b) {
            return b[1] - a[1];
        });

        var result = [];
        for(var i = 0; i < tmp.length; i++) {
            result[tmp[i][0]] = tmp[i][1];
        }
        return result;
    }

    function createGrid(data) {
        var keys = Object.keys(data);
        var grid = '';
        grid += '<div class="ui grid">';
        grid += '<div class="row">';
        grid += '<div class="four wide column"></div>';
        grid += '<div class="four wide column">Country</div>';
        grid += '<div class="four wide column">Mentions</div>';
        grid += '<div class="four wide column"></div>';
        grid += '</div>';

        for (var i = 1; i < 11; i++) {
            grid += '<div class="row">';
            grid += '<div class="four wide column"></div>';
            grid += '<div class="four wide column">' + keys[i] + '</div>';
            grid += '<div class="four wide column">' + data[keys[i]] + '</div>';
            grid += '<div class="four wide column"></div>';
            grid += '</div>';
        }
        grid += '</div>';

        $('body').html(grid);
    }
</script>
</body>
</html>