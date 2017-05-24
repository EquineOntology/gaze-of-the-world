<?php

use Carbon\Carbon;
use CFratta\GazeOfTheWorld\Countries;
use Illuminate\Database\Seeder;

class NewsDeltaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$countries = Countries::get2d();

	    $row = ['date' => Carbon::yesterday()->toDateString()];

	    foreach($countries as $code => $info)
	    {
    		$countryData = DB::table('news_data')->select($code)->get();

    		// Get total mentions of country.
    		$countryTotal = $countryData->reduce(function($carry, $item) use($code){
    			return $carry + $item->$code;
		    });

    		// Divide them by the days recorded to get the
    		$row[$code] = round($countryTotal/$countryData->count(), 8);
	    }

	    DB::table('news_delta')->insert($row);
    }
}
