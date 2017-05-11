<?php

namespace CFratta\GazeOfTheWorld\Http\Controllers;

// use CFratta\GazeOfTheWorld\Alexer; // Alexer-related code
use CFratta\GazeOfTheWorld\Utilities\TypeUtils;
use CFratta\GazeOfTheWorld\Website;
use Illuminate\Support\Facades\DB;

class WebsitesController extends Controller {

	/**
	 * Count mentions of the provided countries in all top100 feeds.
	 *
	 * @param  $countries
	 * @return array|mixed
	 */
	public static function getLatestMentions($countries)
	{
		$sites = self::getTopActiveSites();

		$mentions = [];
		foreach ($sites as $site)
		{
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

		// $topSites = Alexer::getTopNewsSites(); // Alexer-related code

		$sitesWithFeed = DB::table('websites')
			->where('usable', true)
			->select('name', 'feedUrl', 'language')
			->get();

		$sitesWithFeed = $sitesWithFeed->mapWithKeys(function ($item)
		{
			return [
				$item->name => [
					'url'      => $item->feedUrl,
					'language' => $item->language
				]
			];
		});

		// Alexer-related code
		// $topActiveSites = $sitesWithFeed->filter(function ($item, $key) use ($topSites) {
		//     return $topSites->contains($key);
		// });

		$websites = [];
		foreach ($sitesWithFeed as $name => $data)
		{
			$websites[] = new Website($name, $data['url'], $data['language']);
		}
		// Alexer-related code
		// foreach ($topActiveSites as $name => $url) {
		//     $websites[] = new Website($name, $url);
		// }

		return $websites;
	}
}
