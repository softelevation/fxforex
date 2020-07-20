<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;


    public $user,$password_decrypt;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$password_decrypt)
    {
        $this->user = $user;
        $this->password_decrypt = $password_decrypt;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.welcome');
    }
}
