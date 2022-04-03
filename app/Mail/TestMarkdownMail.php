<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMarkdownMail extends Mailable
{



    use Queueable, SerializesModels;

    public $url="http//www.google.com";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->send('Bramslevel129@gmail.com')
        ->markdown('emails.markdown-test');
    }
}
