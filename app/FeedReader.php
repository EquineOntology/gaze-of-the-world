<?php


namespace GazeOfTheWorld;

require_once 'Feeds.php';

class FeedReader
{
    static function getFeeds() {
        $feeds = getFeedList();

        foreach($feeds as $name => $url)
        {
            echo "<h1>" . $name . "</h1>";
            FeedReader::getFeed($url);
        }
    }

    static function getFeed($feed_url)
    {

        $content = file_get_contents($feed_url);
        $x = new \SimpleXmlElement($content);

        echo "<ul>";

        foreach ($x->channel->item as $entry) {
            echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
        }
        echo "</ul>";
    }
}