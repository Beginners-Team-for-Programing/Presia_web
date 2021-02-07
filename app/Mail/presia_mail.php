<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class presia_mail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $mail;
    public $tel;
    public $contents;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($a_text)
    {
        $this->name = $a_text->name;
        $this->mail = $a_text->mail;
        $this->tel = $a_text->tel;
        $this->contents = $a_text->contents;
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
