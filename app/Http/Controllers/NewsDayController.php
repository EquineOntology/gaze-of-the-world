<?php

namespace CFratta\GazeOfTheWorld\Http\Controllers;

use Carbon\Carbon;
use CFratta\GazeOfTheWorld\NewsDay;
use Illuminate\Support\Facades\DB;

class NewsDayController extends Controller
{
    /**
     * Save the current news day to the database.
     *
     * @param  $mentions
     */
    public static function saveNewsDay($mentions)
    {
        $newsDay = new NewsDay();
        $newsDay->setAttribute('date', Carbon::today()->toDateString());
        foreach ($mentions as $code => $number) {
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
        return view('newsDay.table')->with('mentions', array_slice($mentions, 0, 10));
    }

    /**
     * Display all countries as of the latest feed reading.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $mentions = $this->getOrderedMentions();
        return view('newsDay.table')->with('mentions', $mentions);
    }


    private function getOrderedMentions()
    {
        $mentions = DB::table('news_data')->orderBy('date', 'desc')->first();

        $mentions = (array)$mentions;

        unset($mentions['recordId']);
        unset($mentions['date']);

        arsort($mentions);

        return $mentions;
    }
}
