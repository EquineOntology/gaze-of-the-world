<?php

namespace ChristianFratta\GazeOfTheWorld\Feed;

require "vendor/autoload.php";


class FeedReader
{

    /**
     * Get all items published within the last hour from all feeds.
     *
     * @return array
     */
    public function getLatestItemsFromAllFeeds()
    {
        $items = array();
        foreach (Feeds::$feeds as $name => $feedURL) {
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
                    "title" => $item->get_title(),
                    "description" => $item->get_description(),
                    "content" => $item->get_content(),
                    "permalink" => $item->get_permalink()
                ];
            }
        }

        return $items;
    }
}