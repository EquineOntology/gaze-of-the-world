<?php

namespace ChristianFratta\GazeOfTheWorld;

use ChristianFratta\GazeOfTheWorld\Database\DBController;
use ChristianFratta\GazeOfTheWorld\Feed\Alexer;
use ChristianFratta\GazeOfTheWorld\Feed\FeedParser;
use ChristianFratta\GazeOfTheWorld\Feed\FeedReader;
use Dotenv\Dotenv;

require('../vendor/autoload.php');

class App
{
    public static function loadEnv() {
        $dotenv = new Dotenv(__DIR__ . '/../');
        $dotenv->load();
    }


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
    }

    public static function retrieveInformation(string $info) {

        switch($info) {
            case 'today':
                $result = DBController::getByDate(date('Y-m-d'));
                break;
        }

        return $result;
    }
}