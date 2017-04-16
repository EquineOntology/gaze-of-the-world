<?php

namespace CFratta\GazeOfTheWorld;

class Gaze
{
    public static function assimilateFeeds()
    {
        $countries = Countries::get();

        $mentions = \CFratta\GazeOfTheWorld\Http\Controllers\WebsitesController::getLatestMentions($countries);

	    \CFratta\GazeOfTheWorld\Http\Controllers\NewsDayController::saveNewsDay($mentions);
    }

}
