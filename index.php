<?php

use GazeOfTheWorld\Alexer;
use GazeOfTheWorld\Countries;
use GazeOfTheWorld\Feed\FeedParser;
use GazeOfTheWorld\Feed\FeedReader;

require_once "vendor/autoload.php";


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaze of the World</title>

    <link rel="icon" type="image/png" href="favicon.png">

    <link rel="stylesheet" href="css/app.css"/>

</head>
<body>
<div id="wrap">
    <div id="mainContent">
        <?php
        $countries = Countries::get();

        $alexer = new Alexer();
        $sites = $alexer->getTopNewsSites();

        $reader = new FeedReader();

        $reader->feeds = $sites;
        $latestItems = $reader->getLatestItemsFromAllFeeds();

        $parser = new FeedParser();
        $analysis = $parser->sumAllCountryMentions($latestItems, $countries);

//        echo '<pre>';
//        print_r($sites);
//        echo '</pre>';
//        die();

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