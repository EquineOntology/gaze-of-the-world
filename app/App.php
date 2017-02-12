<?php

namespace ChristianFratta\GazeOfTheWorld;

use ChristianFratta\GazeOfTheWorld\Database\DBController;
use ChristianFratta\GazeOfTheWorld\Feed\Alexer;
use ChristianFratta\GazeOfTheWorld\Feed\FeedParser;
use ChristianFratta\GazeOfTheWorld\Feed\FeedReader;

require('../vendor/autoload.php');

class App
{
    public static function assimilateFeeds() {
        $countries = Countries::get();

        $alexer = new Alexer();
        $sites = $alexer->getTopNewsSites();

        $reader = new FeedReader();
        $reader->feeds = $sites;
        $latestItems = $reader->getLatestItemsFromAllFeeds();

        $parser = new FeedParser();
        $analysis = $parser->sumAllCountryMentions($latestItems, $countries);

        DBController::saveToDatabase($analysis);
//        foreach ($analysis as $key => $item) {
//            if ($item > 0) {
//                echo '<b>' . $countries[$key][0] . '</b>: ' . $item . '<br>';
//            }
//        }
    }

    public static function retrieveInformation() {
        DBController::getFromDatabase();

    }
}