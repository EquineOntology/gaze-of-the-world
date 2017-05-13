<?php

namespace CFratta\GazeOfTheWorld;

class Gaze
{
    public static function assimilateFeeds()
    {
        $countries = Countries::get();

        $mentions = \CFratta\GazeOfTheWorld\Http\Controllers\WebsitesController::getLatestMentions($countries);

	    $newsDay = new NewsDay();
	    $newsDay->saveNewsDay($mentions);
    }
}
