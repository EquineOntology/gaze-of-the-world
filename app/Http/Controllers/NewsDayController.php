<?php

namespace CFratta\GazeOfTheWorld\Http\Controllers;

use Carbon\Carbon;
use CFratta\GazeOfTheWorld\NewsDay;
use Illuminate\Support\Facades\DB;

class NewsDayController extends Controller
{
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
        $mentions = DB::table('news_data')->orderBy('date')->first();

        $mentions = (array)$mentions;
        unset($mentions['recordId']);
        unset($mentions['date']);
        return view('newsDay.top10')->with('mentions', $mentions);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \CFratta\GazeOfTheWorld\NewsDay  $newsDay
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsDay $newsDay)
    {
        //
    }


    /**
     * Save the current news day to the database.
     *
     * @param  $mentions
     */
    public static function saveNewsDay($mentions) {
        $newsDay = new NewsDay();
        $newsDay->setAttribute('date', Carbon::today()->toDateString());
        foreach($mentions as $code => $number) {
            $newsDay->$code = $number;
        }

        $newsDay->save();
    }
}
