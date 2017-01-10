<?php

namespace ChristianFratta\GazeOfTheWorld\Feed;

require "vendor/autoload.php";


class Feeds
{
    public static $feeds = [
        'NYT - Homepage' => 'http://rss.nytimes.com/services/xml/rss/nyt/HomePage.xml',
        //'La Stampa - Homepage' => 'http://www.lastampa.it/rss.xml',
        'The Guardian - World' => 'https://www.theguardian.com/world/rss',
    ];
}