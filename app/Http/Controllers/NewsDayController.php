<?php

namespace CFratta\GazeOfTheWorld\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class NewsDayController extends Controller
{
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

		// We save the date to get the correct source data.
		$date = $mentions[0]->date;

		// We then remove the "date" datapoint from each day for correct parsing.
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

		$lastTwoDays = $this->getLastTwoDays($allMentions);

		$volume = DB::table('news_volume')
			->select(['total', 'relevant', 'sources'])
			->whereDate('date', $date)
			->get();

		return view('main')
			->with('latest', $latest)
			->with('mostMentioned', $timeSeries[key($latest)])
			->with('lastTwoDays', $lastTwoDays)
			->with('volume', $volume[0]);
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
	 * Create a time-series array from the given mentions.
	 *
	 * @param  array $mentions
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

	/**
	 * Populate a timeSeries array with only the last two days.
	 *
	 * @param  $mentions
	 * @return array
	 */
	private function getLastTwoDays($mentions)
	{
		$timeSeries = [];
		$i = 0;
		foreach ($mentions as $mention)
		{
			// We just want the last two days.
			if ($i == 2)
			{
				break;
			}

			foreach ($mention as $country => $count)
			{
				if ($country == 'date')
				{
					continue;
				}

				if (!isset($timeSeries[$country]))
				{
					$timeSeries[$country] = [];
				}
				array_push($timeSeries[$country], $count);
			}
			$i ++;
		}

		return $timeSeries;
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

		$lastTwoDays = $this->getLastTwoDays($mentions);

		$volume = DB::table('news_volume')
			->select(['total', 'relevant', 'sources'])
			->where('date', Carbon::yesterday()->toDateString())
			->get();

		return view('main')
			->with('latest', $latest)
			->with('mostMentioned', $timeSeries[key($latest)])
			->with('lastTwoDays', $lastTwoDays)
			->with('volume', $volume[0]);
	}
}
