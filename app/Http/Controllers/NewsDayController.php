<?php

namespace CFratta\GazeOfTheWorld\Http\Controllers;

use Carbon\Carbon;
use CFratta\GazeOfTheWorld\NewsDay;
use Illuminate\Support\Facades\DB;

class NewsDayController extends Controller {

	/**
	 * Save the current news day to the database.
	 *
	 * @param  $mentions
	 */
	public static function saveNewsDay($mentions)
	{
		$newsDay = new NewsDay();
		$newsDay->setAttribute('date', Carbon::yesterday()->toDateString());
		foreach ($mentions as $code => $number)
		{
			$newsDay->$code = $number;
		}

		$newsDay->save();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Display the top 10 countries as of the latest feed reading.
	 *
	 */
	public function showTop10()
	{
		$mentions = $this->getOrderedMentions();

		$latest = array_slice($this->getLatestMentions($mentions), 0, 10);

		$countriesInTop10 = array_keys($latest);
		$allMentions = $mentions->all();
		foreach ($allMentions as $day => $data)
		{
			foreach ($data as $key => $value)
			{
				if (!in_array($key, $countriesInTop10) && $key != 'date')
				{
					unset($data->$key);
				}
			}
		}

		$timeSeries = $this->populateTimeSeries($allMentions);

		return view('newsDay.table')
			->with('latest', $latest)
			->with('timeSeries', $timeSeries);
	}

	/**
	 * Get mentions table, ordered by date (latest first).
	 *
	 * @return \Illuminate\Support\Collection
	 */
	private function getOrderedMentions()
	{
		return DB::table('news_data')->orderBy('date', 'desc')->get();
	}


	/**
	 * Get the latest recorded array of mentions and sort it by descending count.
	 *
	 * @param  $mentions
	 * @return array
	 */
	private function getLatestMentions($mentions)
	{
		$mentions = $mentions->first();
		$mentions = (array) $mentions;

		unset($mentions['recordId']);
		unset($mentions['date']);

		arsort($mentions);

		return $mentions;
	}

	/**
	 * Display all countries as of the latest feed reading.
	 *
	 */
	public function showAll()
	{
		$mentions = $this->getOrderedMentions();
		$latest = $this->getLatestMentions($mentions);

		$mentions = $mentions->all();
		$timeSeries = $this->populateTimeSeries($mentions);

		return view('newsDay.table')
			->with('latest', $latest)
			->with('timeSeries', $timeSeries);

	}


	/**
	 * Create a time-series array from the given mentions.
	 *
	 * @param  array  $mentions
	 * @return array
	 */
	private function populateTimeSeries($mentions)
	{
		$timeSeries = [];
		foreach ($mentions as $mention)
		{
			foreach ($mention as $country => $count)
			{
				if ($country == 'date')
				{
					continue;
				}

				$timeSeries[$country][$mention->date] = $count;
			}
		}

		return $timeSeries;
	}
}
