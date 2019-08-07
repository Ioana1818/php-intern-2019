<?php

namespace App\Mail;
Use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ValidationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $newuser;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( User $newuser)
    {
        $this->newuser=$newuser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.validation');
    }
}
