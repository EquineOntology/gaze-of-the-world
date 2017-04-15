<?php

namespace CFratta\GazeOfTheWorld;

use PHPHtmlParser\Dom;

class Alexer
{
    /**
     * Get the top 100 websites in "News" from Alexa.
     *
     * @return  \Illuminate\Support\Collection
     */
    public static function getTopNewsSites()
    {
        $dom = new Dom();

        $urls = [];
        for ($i = 0; $i < 2; $i++) {
            $dom->loadFromUrl('http://www.alexa.com/topsites/category;' . $i . '/Top/News');
            $content = $dom->find('.DescriptionCell > p > a');

            // We don't want $i sub-arrays with N links each.
            $urls = array_merge($urls, self::getURLs($content));
        }

        // array_unique only removes items, it doesn't reindex the array.
        // So we do it instead.
        $urls = array_values(array_unique($urls));

        // Set URLs as keys instead of values.
//        $urls = array_flip($urls);

        // Remove blacklisted websites.
//        $urls = $this->removeBlacklisted($urls);

        // Associate URLs with their feeds.
//        $urls = $this->getFeeds($urls);

        return collect($urls);
    }


    private static function getURLs($content)
    {
        $urls = [];
        foreach ($content as $site) {
            $html = $site->outerHtml;

            $url = [];
            preg_match('/<a href=\"\/siteinfo\/([^\"]*)\">(.*)<\/a>/iU', $html, $url);
            // TODO: switch to https when deploying.
            $urls[] = $url[1];
        }

        return $urls;
    }
}