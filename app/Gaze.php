<?php

namespace CFratta\GazeOfTheWorld;

use Carbon\Carbon;
use CFratta\GazeOfTheWorld\Mail\FeedsEmpty;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Gaze {

	/**
	 * Analyze feeds and store relevant info in the database.
	 */
	public static function assimilateFeeds()
	{
		$countries = Countries::get();

		$sites = \CFratta\GazeOfTheWorld\Http\Controllers\WebsitesController::getTopActiveSites();

		$mentions = \CFratta\GazeOfTheWorld\Http\Controllers\WebsitesController::getLatestMentions($countries, $sites);

		$newsDay = new NewsDay();

		Gaze::saveMentions($newsDay, $mentions);

		Gaze::calculateAndSaveVolume($newsDay, $sites);

		Gaze::calculateAndSaveDelta($newsDay, $mentions);
	}


	/**
	 * Store country mention info in the database.
	 *
	 * @param  NewsDay $newsDay
	 * @param  array $mentions
	 */
	private static function saveMentions($newsDay, $mentions)
	{
		$newsDay->saveMentions($mentions);
	}


	/**
	 * Store volume info in the database.
	 *
	 * @param  NewsDay $newsDay
	 * @param  array $sites
	 */
	private static function calculateAndSaveVolume($newsDay, $sites)
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
	 *
	 * @param  array $feeds
	 */
	private static function warnAboutEmptyFeeds($feeds)
	{
		Mail::to(config('mail.maintainer'))->send(new FeedsEmpty($feeds));
	}


	/**
	 * Calculate the deltas and store them in the DB. We calculate through PHP instead of using SUM in the DB to reduce DB queries.
	 * @param  NewsDay $newsDay
	 * @param  array $mentions
	 */
	private static function calculateAndSaveDelta($newsDay, $mentions)
	{
		$newDeltas = [];
		$currentDeltas = (DB::table('news_delta')->where('date', Carbon::yesterday()->subDay()->toDateString())->get())[0];
		$daysRecorded = DB::table('news_data')->count();
		foreach ($mentions as $country => $amount)
		{
			// To calculate the new mean, we do (oldMean * days + currentAmount) / (days + 1).
			$newDeltas[$country] = round((($currentDeltas->$country * $daysRecorded + $amount) / ($daysRecorded + 1)), 8);
		}

		$newsDay->saveDeltas($newDeltas);
	}
}
