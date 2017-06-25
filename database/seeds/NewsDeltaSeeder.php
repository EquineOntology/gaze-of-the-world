<?php

use Carbon\Carbon;
use CFratta\GazeOfTheWorld\Countries;
use Illuminate\Database\Seeder;

class NewsDeltaSeeder extends Seeder {

	/**
	 * Calculate the daily mean news volume for each country for all the days in the DB.
	 *
	 * @return void
	 */
	public function run()
	{
		$countries = Countries::get2d();

		$newsData = DB::table('news_data')->orderBy('date', 'asc')->select('*')->get()->toArray();
		$rowCount = sizeof($newsData);

		$totals = [];
		$newsDelta = [];
		for ($i = 0; $i < $rowCount; $i ++)
		{
			$date = $newsData[$i]->date;

			$newsDelta[$i]['date'] = $date;

			if ($i != 0)
			{
				// dd($newsData);
				foreach ($countries as $code => $info)
				{
					// Add up total mentions of country.
					$totals[$code] += $newsData[$i]->$code;;

					// $countryData->reduce(function ($carry, $item) use ($code)
					// {
					// 	return $carry + $item->$code;
					// });

					// Divide them by the days recorded to get the deviation for today.
					$newsDelta[$i][$code] = round($totals[$code] / ($i + 1), 8);
				}
			}
			else
			{
				foreach ($countries as $code => $info)
				{
					$newsDelta[0][$code] = $newsData[$i]->$code;
					$totals[$code] = $newsData[$i]->$code;
				}
			}
		}

		foreach ($newsDelta as $deltas)
		{
			DB::table('news_delta')->insert($deltas);
		}
	}
}
