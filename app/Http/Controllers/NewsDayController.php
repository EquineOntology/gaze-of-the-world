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
		$newsDay->setAttribute('date', Carbon::today()->toDateString());
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
	 * @return \Illuminate\Http\Response
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

		$timeSeries = [];
		foreach($allMentions as $mention) {
			foreach($mention as $country => $count) {
				if($country == 'date') {
					continue;
				}

				$timeSeries[$country][$mention->date] = $count;
			}
		}

		return view('newsDay.table')
			->with('latest', $latest)
			->with('timeSeries', $timeSeries);
    }

	private function getOrderedMentions()
	{
		return DB::table('news_data')->orderBy('date', 'desc')->get();
	}

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
		$timeSeries = $this->getOrderedMentions();
		$latest = $this->getLatestMentions($timeSeries);

		return view('newsDay.table')
			->with('latest', $latest)
			->with('timeSeries', $timeSeries);
	}

	private function getLastWeek($country)
	{
		$mentions = DB::table('news_data')->orderBy('date', 'desc')->first();
	}
}
