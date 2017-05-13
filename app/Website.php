<?php

namespace CFratta\GazeOfTheWorld;

use CFratta\GazeOfTheWorld\Utilities\Cleaner;
use CFratta\GazeOfTheWorld\Utilities\TypeUtils;
use SimplePie;

class Website
{
    /**
     * @var  string  The domain of the website.
     */
    public $name;

    /**
     * @var  string  The URL of the website's "world" feed
     */
    public $feedUrl = '';

	/**
	 * @var  string  The language of a website.
	 */
    public $language = '';

	/**
	 * @var  string  The country of a website.
	 */
	public $country = '';

    /**
     * @var  SimplePie  The SimplePie instance of the website's feed.
     */
    public $feed;

	/**
	 * @var  int  Total number of articles in a feed in the past day.
	 */
	public $totalNewsVolume = 0;

	/**
	 * @var  int  Total articles mentioning at least one country in the past day.
	 */
	public $relevantNewsVolume = 0;


	/**
	 * Website constructor.
	 *
	 * @param  string $name
	 * @param  string $feedUrl
	 * @param  string $language Website language. Default is English.
	 * @param  string $country  Website country. No default.
	 */
    public function __construct($name, $feedUrl = '', $language = '', $country = '')
    {
        $this->name = $name;
        $this->feedUrl = $feedUrl;
        if($language == '') {
        	$language = 'EN';
        }
        $this->language = $language;

	    $this->country = $country;

        if($feedUrl) {
            $this->feed = new \SimplePie();
            $this->feed->set_feed_url($feedUrl);
            $this->feed->set_cache_location(storage_path() . '/simplepie_cache');
            $this->feed->init();
        }
    }


    /**
     * Count mentions of countries in the provided feed.
     *
     * @param  $countries
     * @return array|mixed
     */
    public function countCountryMentionsInFeed($countries)
    {
        $articles = $this->getLatestArticles($this->feed);

        $this->totalNewsVolume = sizeof($articles);

        $feedMentions = [];
        foreach ($articles as $name => $article) {
            $article = Cleaner::cleanArticle($article);
            $mentionsInArticle = $this->countCountryMentionsInArticle($article, $countries);
            $feedMentions = TypeUtils::sumMentions($feedMentions, $mentionsInArticle);
        }

        return $feedMentions;
    }


    /**
     * Get all items published within the last hour from the provided feed.
     *
     * @param  SimplePie $feed
     * @return array
     */
    public function getLatestArticles(SimplePie $feed)
    {
        $aDayAgo = time() - (24 * 60 * 60);

        $items = [];
        foreach ($feed->get_items() as $item) {
            if ($item->get_date('U') > $aDayAgo) {
                $items[] = [
                    "date" => $item->get_date('U'),
                    "title" => strtolower($item->get_title()),
                    "description" => strtolower($item->get_description()),
                    "content" => strtolower($item->get_content()),
                    //                    "permalink" => $item->get_permalink()
                ];
            }
        }

        return $items;
    }


    /**
     * Count mentions of countries in the provided item.
     *
     * @param  $item
     * @param  $countries
     * @return  array
     */
    private function countCountryMentionsInArticle($item, $countries)
    {
        $mentions = [];
        foreach ($countries as $key => $names) {
        	$hasCountryMentions = false;

        	$names = is_array($names[$this->language]) ? $names[$this->language] : [$names[$this->language]];
            foreach ($names as $name) {

                $exp = '/ ' . $name . ' /i';

                if (!array_key_exists($key, $mentions)) {
                    $mentions[$key] = 0;
                }
                if (preg_match($exp, $item["title"])) {
                    $mentions[$key] += 1;
	                $hasCountryMentions = true;
	                break;

                } elseif (preg_match($exp, $item["content"])) {
                    $mentions[$key] += 1;
	                $hasCountryMentions = true;
	                break;

                } elseif ($item["description"] != $item["content"] && preg_match($exp, $item["description"])) {
                    $mentions[$key] += 1;
	                $hasCountryMentions = true;
	                break;
                }
            }

            // If at least a contry was mentioned, we count this as a relevant article to us.
            if ($hasCountryMentions) {
            	$this->relevantNewsVolume += 1;
            }
        }

        return $mentions;
    }
}