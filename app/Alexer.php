<?php


namespace GazeOfTheWorld;

require_once 'vendor/autoload.php';

use GazeOfTheWorld\Feed\Feeds;
use PHPHtmlParser\Dom;

class Alexer
{


    public function getTopNewsSites()
    {
        $dom = new Dom();

        $urls = [];
        for ($i = 0; $i < 4; $i++) {
            $dom->loadFromUrl('http://www.alexa.com/topsites/category;' . $i . '/Top/News');
            $content = $dom->find('.desc-paragraph > a');

            // We don't want 4 sub-arrays with 25links each.
            $urls = array_merge($urls, $this->getURLs($content));
        }

        // array_unique only removes items, it doesn't reindex the array.
        // So we do it instead.
        $urls = array_values(array_unique($urls));

        // Set URLs as keys instead of values.
        $urls = array_flip($urls);

        // Remove blacklisted websites.
        $urls = $this->removeBlacklisted($urls);

        // Associate URLs with their feeds.
        $urls = $this->getFeeds($urls);

        return $urls;

    }

    private function getURLs($content)
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

    private function removeBlacklisted($urls)
    {
        foreach (Feeds::$blacklist as $url) {
            unset($urls[$url]);
        }

        return $urls;
    }

    private function getFeeds($urls)
    {
        $feeds = Feeds::$feeds;

        $urlsWithFeed = [];

        foreach ($urls as $url => $value) {
            if (isset($feeds[$url])) {
                $urlsWithFeed[$url] = $feeds[$url];
            }
        }

        return $urlsWithFeed;
    }
}

