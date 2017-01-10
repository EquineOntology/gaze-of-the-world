<?php
use ChristianFratta\GazeOfTheWorld\Feed\FeedParser;
use ChristianFratta\GazeOfTheWorld\Feed\FeedReader;
use SameerShelavale\PhpCountriesArray\CountriesArray;

require "vendor/autoload.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaze of the World</title>

    <link rel="stylesheet" href="css/app.css"/>

</head>
<body>
<div id="wrap">
    <div id="mainContent">
        <?php
        $countries = CountriesArray::get();
        $reader = new FeedReader();
        $latestItems = $reader->getLatestItemsFromAllFeeds();

        $parser = new FeedParser();
        $analysis = $parser->sumAllCountryMentions($latestItems, CountriesArray::get());

        foreach($analysis as $key => $item){
            if ($item > 0) {
                echo '<b>' . $countries[$key] . '</b>: ' . $item . '<br>';
            }
        }
        ?>
    </div>

</div>
<script src="app.js"></script>
</body>
</html>