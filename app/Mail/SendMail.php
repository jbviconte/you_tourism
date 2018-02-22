<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use User;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $userToken = $user->token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $userToken)
    {
        $this->usertoken = $token;
    }

    public function via($mail)
    {
      return ['email'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build($mail)
    {
        return $this->view('mail/passwordreset');
    }
}
