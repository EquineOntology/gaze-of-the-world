<?php

namespace CFratta\GazeOfTheWorld\Http\Controllers;

use Carbon\Carbon;
use CFratta\GazeOfTheWorld\Countries;
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
		$deltas = $this->getDeltas();
		$date = $mentions[0]->date;
		$lastTwoDeltaDays = $this->getLastTwoDeltaDays($deltas, $date);
		$gazedUpon = array_slice($this->calculateGazedUpon($mentions, $lastTwoDeltaDays), 0, 10);
		$latestMentions = $this->getLatestMentions($mentions);

		$countriesInTop10 = [];
		foreach ($gazedUpon as $country => $data)
		{
			$countriesInTop10[$country] = $latestMentions[$country];
		}

		$top10Codes = array_keys($latestMentions);
		$allMentions = $mentions->all();

		// We then remove the "date" datapoint from each day for correct parsing.
		foreach ($allMentions as $day => $data)
		{
			foreach ($data as $key => $value)
			{
				if (!in_array($key, $top10Codes) && $key != 'date')
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
			->with('latest', $countriesInTop10)
			->with('mostMentioned', $timeSeries[key($countriesInTop10)])
			->with('deltas', $deltas->toArray())
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
			$i++;
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

		$deltas = $this->getDeltas();
		$date = $mentions[0]->date;
		$lastTwoDeltaDays = $this->getLastTwoDeltaDays($deltas, $date);
		$gazedUpon = $this->calculateGazedUpon($mentions, $lastTwoDeltaDays);

		$latestMentions = $this->getLatestMentions($mentions);

		$gazedUponWithMentions = [];
		foreach ($gazedUpon as $country => $data)
		{
			$gazedUponWithMentions[$country] = $latestMentions[$country];
		}


		$mentions = $mentions->all();
		$timeSeries = $this->populateTimeSeries($mentions);

		$lastTwoDays = $this->getLastTwoDays($mentions);

		$volume = DB::table('news_volume')
			->select(['total', 'relevant', 'sources'])
			->where('date', Carbon::yesterday()->toDateString())
			->get();

		return view('main')
			->with('latest', $gazedUponWithMentions)
			->with('mostMentioned', $timeSeries[key($gazedUponWithMentions)])
			->with('deltas', $deltas->toArray())
			->with('lastTwoDays', $lastTwoDays)
			->with('volume', $volume[0]);
	}

	/**
	 * Calculate the most gazed upon countries.
	 *
	 * @param $mentions
	 * @param $deltas
	 * @return array
	 */
	private function calculateGazedUpon($mentions, $deltas) {

		$latestMentions = $this->getLatestMentions($mentions);
		$countries = Countries::get2d();
		$rankedCountries = [];
		foreach($countries as $code => $data) {
			$divisor = $deltas[0]->$code != 0 ? $deltas[0]->$code : 1;
			$deviation = $deltas[1]->$code / $divisor;
			$rankedCountries[$code] = $latestMentions[$code] * $deviation;
		}

		arsort($rankedCountries);

		return $rankedCountries;
	}

	private function getDeltas() {
		return DB::table('news_delta')->orderBy('date', 'desc')->get();
	}


	/**
	 * @param Collection $deltas
	 * @param $date
	 * @return mixed
	 */
	private function getLastTwoDeltaDays($deltas, $date){
		$dayBeforeDate = Carbon::parse($date)->subDay()->toDateString();
		$deltas = collect($deltas);
		$deltas = $deltas->filter(function($delta) use ($date, $dayBeforeDate){
			return ($delta->date == $date || $delta->date == $dayBeforeDate);
		})->toArray();

		foreach (['deltaId', 'date'] as $key)
		{
			unset($deltas[0]->$key);
			unset($deltas[1]->$key);
		}

		$reindexed = array_values($deltas);
		return $reindexed;
	}
}
