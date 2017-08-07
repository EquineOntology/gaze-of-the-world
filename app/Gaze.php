<?php

namespace CFratta\GazeOfTheWorld;

use Carbon\Carbon;
use CFratta\GazeOfTheWorld\Http\Controllers\WebsitesController;
use CFratta\GazeOfTheWorld\Mail\FeedsEmpty;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Thujohn\Twitter\Facades\Twitter;

class Gaze
{

    /**
     * Analyze feeds and store relevant info in the database.
     */
    public static function assimilateFeeds()
    {
        $countries = Countries::get();

        $sites = WebsitesController::getTopActiveSites();

        $mentions = WebsitesController::getLatestMentions($countries, $sites);

        $newsDay = new NewsDay();

        Gaze::saveMentions($newsDay, $mentions);

        Gaze::calculateAndSaveVolume($newsDay, $sites);

        Gaze::calculateAndSaveDelta($newsDay, $mentions);

        arsort($mentions);
        $tweetInfo = [];
        foreach (array_slice($mentions, 0, 10) as $key => $value) {
            $tweetInfo[] = is_array($countries[$key]['EN']) ? $countries[$key]['EN'][0] : $countries[$key]['EN'];
        }
        Gaze::tweet($tweetInfo);
    }


    /**
     * Store country mention info in the database.
     *
     * @param  NewsDay $newsDay
     * @param  array $mentions
     */
    private static function saveMentions($newsDay, $mentions)
    {
        $newsDay->saveMentions($mentions);
    }


    /**
     * Store volume info in the database.
     *
     * @param  NewsDay $newsDay
     * @param  array $sites
     */
    private static function calculateAndSaveVolume($newsDay, $sites)
    {
        $volume = [
            'total' => 0,
            'relevant' => 0,
            'sources' => 0
        ];
        $emptyFeeds = [];
        foreach ($sites as $site) {
            /* @var $site Website */
            if ($site->totalNewsVolume != 0) {
                $volume['total'] += $site->totalNewsVolume;
                $volume['relevant'] += $site->relevantNewsVolume;
                $volume['sources'] += 1;
            } else {
                $emptyFeeds[] = $site->name;
            }
        }
        $newsDay->saveVolume($volume);

        // If one or more of the feeds were empty, warn the maintainer.
        if (sizeof($emptyFeeds) > 0) {
            Gaze::warnAboutEmptyFeeds($emptyFeeds);
        }
    }


    /**
     * Send email to the app maintainer with info about 0-volume feeds.
     *
     * @param  array $feeds
     */
    private static function warnAboutEmptyFeeds($feeds)
    {
        Mail::to(config('mail.maintainer'))->send(new FeedsEmpty($feeds));
    }


    /**
     * Calculate the deltas and store them in the DB. We calculate through PHP instead of using SUM in the DB to reduce DB queries.
     * @param  NewsDay $newsDay
     * @param  array $mentions
     */
    private static function calculateAndSaveDelta($newsDay, $mentions)
    {
        $newDeltas = [];
        $currentDeltas = (DB::table('news_delta')->where('date', Carbon::yesterday()->subDay()->toDateString())->get())[0];
        $daysRecorded = DB::table('news_data')->count();
        foreach ($mentions as $country => $amount) {
            // To calculate the new mean, we do (oldMean * days + currentAmount) / (days + 1).
            $newDeltas[$country] = round((($currentDeltas->$country * $daysRecorded + $amount) / ($daysRecorded + 1)), 8);
        }

        $newsDay->saveDeltas($newDeltas);
    }

    public static function tweet($info)
    {
        $introSentences = [
            "The analysis is in!\n",
            "Another day has ended, and these are the results:\n",
            "Yesterday's news have been analyzed:\n",
            "🤖beep boop🤖 tweet_about_news_analysis()\n",
            "Haven't checked the news yesterday?\n",
            "🌹 are red/💠 are blue/I've read the 📰/So you don't need to!\n",
        ];

        $tweet = $introSentences[array_rand($introSentences)];

        $tweet .= "The most mentioned countries on " . Carbon::yesterday()->toFormattedDateString() . " were:\n\n";

        $maxChars = 140;
        $top10Index = 0;
        // If it's the first tweet we can't forget we added the intro already.
        if ($top10Index == 0) {
            $currentChars = $maxChars - strlen($tweet);
        }

        $previousTweet = null;
        $twitterifiedName = '#' . str_replace(' ', '', $info[$top10Index]);

        while ($currentChars > 0 && $top10Index < sizeof($info)) {
            $nextLine = ($top10Index + 1) . ". $twitterifiedName\n";

            if ($currentChars - strlen($nextLine) < 0) {
                Twitter::postTweet(['status' => $tweet]);
                $tweet = "";
                $currentChars = $maxChars;
            } else if ($top10Index + 1 == 10) {
                $tweet .= $nextLine;
                Twitter::postTweet(['status' => $tweet]);
                $top10Index++;
            } else {
                $tweet .= $nextLine;
                $currentChars -= strlen($nextLine);
                $top10Index++;
            }
        }
    }
}
