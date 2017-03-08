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
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $mentions = DB::table('news_data')->orderBy('date', 'desc')->first();

        $mentions = (array)$mentions;

        unset($mentions['recordId']);
        unset($mentions['date']);

        arsort($mentions);

        return view('newsDay.top10')->with('mentions', array_slice($mentions, 0, 10));
    }
}
