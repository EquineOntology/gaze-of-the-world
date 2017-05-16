<?php

namespace CFratta\GazeOfTheWorld;

use CFratta\GazeOfTheWorld\Mail\FeedsEmpty;
use Illuminate\Support\Facades\Mail;

class Gaze {

	/**
	 * Analyze feeds and store relevant info in the database.
	 */
	public static function assimilateFeeds()
	{
		$countries = Countries::get();

		$sites = \CFratta\GazeOfTheWorld\Http\Controllers\WebsitesController::getTopActiveSites();

		$newsDay = new NewsDay();

		Gaze::saveMentions($newsDay, $countries, $sites);

		Gaze::saveVolume($newsDay, $sites);
	}


	/**
	 * Store country mention info in the database.
	 *
	 * @param  NewsDay  $newsDay
	 * @param  array  $countries
	 * @param  array  $sites
	 */
	private static function saveMentions($newsDay, $countries, $sites)
	{
		$mentions = \CFratta\GazeOfTheWorld\Http\Controllers\WebsitesController::getLatestMentions($countries, $sites);
		$newsDay->saveMentions($mentions);
	}


	/**
	 * Store volume info in the database.
	 *
	 * @param  NewsDay  $newsDay
	 * @param  array  $sites
	 */
	private static function saveVolume($newsDay, $sites)
	{
		$volume = [
			'total'    => 0,
			'relevant' => 0,
			'sources'  => 0
		];
		$emptyFeeds = [];
		foreach ($sites as $site)
		{
			/* @var $site Website */
			if ($site->totalNewsVolume != 0)
			{
				$volume['total'] += $site->totalNewsVolume;
				$volume['relevant'] += $site->relevantNewsVolume;
				$volume['sources'] += 1;
			}
			else
			{
				$emptyFeeds[] = $site->name;
			}
		}
		$newsDay->saveVolume($volume);

		// If one or more of the feeds were empty, warn the maintainer.
		if (sizeof($emptyFeeds) > 0)
		{
			Gaze::warnAboutEmptyFeeds($emptyFeeds);
		}
	}


	/**
	 * Send email to the app maintainer with info about 0-volume feeds.
	 * @param  array  $feeds
	 */
	private static function warnAboutEmptyFeeds($feeds)
	{
		Mail::to(config('APP_MAINTAINER'))->send(new FeedsEmpty($feeds));
	}
}
