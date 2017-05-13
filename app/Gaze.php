<?php

namespace CFratta\GazeOfTheWorld;

class Gaze
{
    public static function assimilateFeeds()
    {
        $countries = Countries::get();

        $websites = \CFratta\GazeOfTheWorld\Http\Controllers\WebsitesController::getTopActiveSites();
        $mentions = \CFratta\GazeOfTheWorld\Http\Controllers\WebsitesController::getLatestMentions($countries, $websites);

	    $newsDay = new NewsDay();
	    $newsDay->saveMentions($mentions);

	    // Compile and record data relevant to news volume.
	    $volume = [
	    	'total' => 0,
		    'relevant' => 0,
		    'sources' => sizeof($websites)
	    ];
	    foreach ($websites as $website)
	    {
	    	$volume['total'] += $website->totalNewsVolume;
	    	$volume['relevant'] += $website->relevantNewsVolume;
	    }
	    $newsDay->saveVolume($volume);
    }
}
