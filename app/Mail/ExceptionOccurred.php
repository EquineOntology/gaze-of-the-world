<?php

namespace CFratta\GazeOfTheWorld\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExceptionOccurred extends Mailable
{
    use Queueable, SerializesModels;

	/**
	 * Create a new message instance.
	 *
	 * @param $content
	 */
    public function __construct($content)
    {
	    $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
	    return $this->view('emails.exception')
		    ->subject('gazeofthe.world error')
		    ->with('content', $this->content);
    }
}
