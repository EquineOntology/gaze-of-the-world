<?php

namespace GazeOfTheWorld\Feed;

require_once "vendor/autoload.php";


class FeedReader
{
    public $feeds = [];

    /**
     * Get all items published within the last hour from all feeds.
     *
     * @return array
     */
    public function getLatestItemsFromAllFeeds()
    {
        $items = array();
        foreach ($this->feeds as $name => $feedURL) {
            $feed = new \SimplePie();
            $feed->set_feed_url($feedURL);
            $feed->init();

            $items[$name] = $this->getLatestItemsFromFeed($feed);
        }

        return $items;
    }


    /**
     * Get all items published within the last hour from the provided feed.
     *
     * @param \SimplePie $feed
     * @return array
     */
    private function getLatestItemsFromFeed(\SimplePie $feed)
    {
        $anHourAgo = time() - (24 * 60 * 60); //TODO: reduce to 60 * 60

        $items = array();
        foreach ($feed->get_items() as $item) {
            if ($item->get_date('U') > $anHourAgo) {
                $items[] = [
                    "date" => $item->get_date('U'),
                    "title" => strtolower($item->get_title()),
                    "description" => strtolower($item->get_description()),
                    "content" => strtolower($item->get_content()),
                    "permalink" => $item->get_permalink()
                ];
            }
        }

        return $items;
    }
}