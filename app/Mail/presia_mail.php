<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class presia_mail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailtext;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($a_text)
    {
        $this->mailtext = $a_text->contents;
        // $mailtext = 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.presia_mail');
    }
}
