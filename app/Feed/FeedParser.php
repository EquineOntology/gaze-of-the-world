<?php

namespace ChristianFratta\GazeOfTheWorld\Feed;

require "vendor/autoload.php";


class FeedParser
{

    /**
     * Count mentions of countries in provided items.
     * @param $feeds
     * @param $countries
     * @return array|mixed
     */
    public function sumAllCountryMentions($feeds, $countries)
    {
        $totalMentions = array();

        // Make sure all keys have a value.
        $countryCodes = array_keys($countries);
        foreach ($countryCodes as $code) {
            $totalMentions[$code] = 0;
        }

        foreach ($feeds as $item) { // The comma is there for a reason, see https://secure.php.net/manual/en/control-structures.foreach.php#control-structures.foreach.list
            $mentionsInItem = $this->countCountryMentionsInFeed($item, $countries);
            $totalMentions = $this->sumMentions($totalMentions, $mentionsInItem);
        }
        return $totalMentions;
    }


    /**
     * Count mentions of countries in the provided feed.
     * @param $feed
     * @param $countries
     * @return array
     * @internal param $item
     */
    private function countCountryMentionsInFeed($feed, $countries)
    {
        $feedMentions = array();

        // Make sure all keys have a value.
        $countryCodes = array_keys($countries);
        foreach ($countryCodes as $code) {
            $feedMentions[$code] = 0;
        }

        foreach ($feed as $name => $item) {
            $mentionsInItem = $this->countCountryMentionsInItem($item, $countries);
            $feedMentions = $this->sumMentions($feedMentions, $mentionsInItem);
        }
        return $feedMentions;
    }


    /**
     * Count mentions of countries in the provided item.
     * @param $item
     * @param $countries
     * @return array
     */
    private function countCountryMentionsInItem($item, $countries)
    {
        $mentions = array();
        foreach ($countries as $key => $name) {
            $exp = '/' . $name . '/i';

            if (!array_key_exists($key, $mentions)) {
                $mentions[$key] = 0;
            }
            if (preg_match($exp, $item["title"])) {
                $mentions[$key] += 1;
            } elseif (preg_match($exp, $item["content"])) {
                $mentions[$key] += 1;
            } elseif ($item["description"] != $item["content"] && preg_match($exp, $item["description"])) {
                $mentions[$key] += 1;
            }

        }
        return $mentions;
    }


    /**
     * Sum country mentions in the two provided arrays.
     *
     * @param $first
     * @param $second
     * @return mixed
     */
    private function sumMentions($first, $second)
    {
        $result = $first;
        $countryCodes = array_keys($first);
        foreach ($countryCodes as $code) {
            $result[$code] = $first[$code] + $second[$code];
        }

        return $result;
    }
}