<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $sub;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
//        $this->sub = $sub;
    }

    public function build()
    {
        return $this->subject($this->details['sub'])->view('emails/TestMail');        
    }
    /**
     * Build the message.
     *
     * @return $this
     */
}
