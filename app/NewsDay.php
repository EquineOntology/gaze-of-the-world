<?php


namespace CFratta\GazeOfTheWorld;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class NewsDay extends Model
{
    public $primaryKey = 'recordId';

    protected $table = 'news_data';

    public $timestamps = false;

	/**
	 * Save the current news day to the database.
	 *
	 * @param  $mentions
	 */
    public function saveNewsDay($mentions) {
	    $this->setAttribute('date', Carbon::yesterday()->toDateString());
	    foreach ($mentions as $code => $number)
	    {
		    $this->$code = $number;
	    }

	    $this->save();
    }
}