<?php

namespace CFratta\GazeOfTheWorld\Http\Controllers;

use CFratta\GazeOfTheWorld\Alexer;
use CFratta\GazeOfTheWorld\Utilities\TypeUtils;
use CFratta\GazeOfTheWorld\Website;
use Illuminate\Support\Facades\DB;

class WebsitesController extends Controller
{
    /**
     * Count mentions of the provided countries in all top100 feeds.
     *
     * @param  $countries
     * @return array|mixed
     */
    public static function getLatestMentions($countries) {
        $sites = self::getTopActiveSites();

        $mentions = [];
        foreach($sites as $site) {
            $mentionsInFeed = $site->countCountryMentionsInFeed($countries);
            $mentions = TypeUtils::sumMentions($mentions, $mentionsInFeed);
        }

        return $mentions;
    }


    /**
     * Get all sites from Alexa's top 100 in "News", if they have a usable feed.
     *
     * @return array
     */
    private static function getTopActiveSites()
    {
        $topSites = Alexer::getTopNewsSites();

        $sitesWithFeed = DB::table('websites')
            ->where('usable', true)
            ->select('name', 'feedUrl')
            ->get();

        $sitesWithFeed = $sitesWithFeed->mapWithKeys(function ($item) {
            return [$item->name => $item->feedUrl];
        });

        $topActiveSites = $sitesWithFeed->filter(function ($item, $key) use ($topSites) {
            return $topSites->contains($key);
        });

        $websites = [];
        foreach ($topActiveSites as $name => $url) {
            $websites[] = new Website($name, $url);
        }

        return $websites;
    }



    /**
     * Count mentions of countries in provided items.
     *
     * @param  $feeds
     * @param  $countries
     * @return array|mixed
     */
    public function sumAllCountryMentions($feeds, $countries)
    {
        $totalMentions = [];

        // Make sure all keys have a value.
        $countryCodes = array_keys($countries);
        foreach ($countryCodes as $code) {
            $totalMentions[$code] = 0;
        }

        foreach ($feeds as $item) {
            $mentionsInItem = [];//$this->countCountryMentionsInFeed($item, $countries);
            $totalMentions = $this->sumMentions($totalMentions, $mentionsInItem);
        }

        return $totalMentions;
    }



    /**
     * Get all items published within the last hour from all feeds.
     *
     * @param  $sites
     * @return array
     */
    public static function getLatestItemsFromAllSites($sites)
    {
        $feeds = self::initFeeds($sites);

        $items = self::getLatestItemsFromFeeds($feeds);

    }





    private static function getLatestItemsFromFeeds($feeds)
    {
        $items = [];
        dd($feeds);
        foreach ($feeds as $feed) {
            dd($feed);
//            $items[$name] = $this->getLatestItemsFromFeed($feed);
        }
    }



}
