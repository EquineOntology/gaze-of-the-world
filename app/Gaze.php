<?php

namespace CFratta\GazeOfTheWorld;

use CFratta\GazeOfTheWorld\Mail\FeedsEmpty;
use Illuminate\Support\Facades\Mail;

class Gaze {

	public static function assimilateFeeds()
	{
		$countries = Countries::get();

		$sites = \CFratta\GazeOfTheWorld\Http\Controllers\WebsitesController::getTopActiveSites();

		$newsDay = new NewsDay();

		Gaze::saveMentions($newsDay, $countries, $sites);

		Gaze::saveVolume($newsDay, $sites);
	}


	private static function saveMentions($newsDay, $countries, $sites)
	{
		$mentions = \CFratta\GazeOfTheWorld\Http\Controllers\WebsitesController::getLatestMentions($countries, $sites);
		$newsDay->saveMentions($mentions);
	}


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
			if ($volume['total'] != 0)
			{
				$volume['total'] += $site->totalNewsVolume;
				$volume['relevant'] += $site->relevantNewsVolume;
				$volume['sources'] += 1;
			}
			else
			{
				$emptyFeeds[] = $site;
			}
		}
		$newsDay->saveVolume($volume);

		// If one or more of the feeds were empty, warn the maintainer.
		if (sizeof($emptyFeeds) > 0)
		{
			Gaze::warnAboutEmptyFeeds($emptyFeeds);
		}
	}


	private static function warnAboutEmptyFeeds($feeds)
	{
		Mail::to(config('APP_MAINTAINER'))->send(new FeedsEmpty($feeds));
	}
}
