<?php


namespace CFratta\GazeOfTheWorld;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NewsDay extends Model
{
    public $primaryKey = 'recordId';

    protected $table = 'news_data';

    public $timestamps = false;

	/**#
	 * Save the current news day to the database.
	 *
	 * @param  $mentions
	 */
    public function saveMentions($mentions) {
	    $this->setAttribute('date', Carbon::yesterday()->toDateString());
	    foreach ($mentions as $code => $number)
	    {
		    $this->$code = $number;
	    }

	    $this->save();
    }


	/**
	 * Save info about the volume of news.
	 * Total: the total number of articles.
	 * Relevant: the number of articles referencing one or more countries.
	 * Sources: the number of feeds analyzed.
	 *
	 * @param  $volume  Info about the volume of news.
	 */
    public function saveVolume($volume) {
    	DB::table('news_volume')->insert([
    		'date' => Carbon::yesterday()->toDateString(),
	        'total' => $volume['total'],
	        'relevant' => $volume['relevant'],
	        'sources' => $volume['sources']
	    ]);
    }
}