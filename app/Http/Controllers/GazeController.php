<?php

namespace CFratta\GazeOfTheWorld\Http\Controllers;

use CFratta\GazeOfTheWorld\Countries;

class GazeController extends Controller
{
    public static function assimilateFeeds()
    {
        $countries = Countries::get();

        $mentions = WebsitesController::getLatestMentions($countries);

        NewsDayController::saveNewsDay($mentions);
    }

}
