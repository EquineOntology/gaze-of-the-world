<?php

namespace CFratta\GazeOfTheWorld\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FeedsEmpty extends Mailable
{
    use Queueable, SerializesModels;

	/**
	 * @var  array  a list of feeds with 0 total articles.
	 */
    public $feeds;

	/**
	 * Create a new message instance.
	 *
	 * @param  array  $feeds
	 */
    public function __construct($feeds)
    {
        $this->feeds = $feeds;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.feedsEmpty');
    }
}
