<?php

namespace CFratta\GazeOfTheWorld\Http\Controllers;

use Illuminate\Support\Facades\DB;

class APIController {

	public function getMentions($country, $days = 150) {
		return DB::table('news_data')
			->orderBy('date', 'desc')
			->select('date', strtoupper($country))
			->take($days)
			->get();
	}
}