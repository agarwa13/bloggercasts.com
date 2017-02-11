<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GoogleAnalyticsEliminateSpamServiceOrderReceived extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $email;
    public $gaProperty;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $gaProperty)
    {
        $this->email = $email;
        $this->gaProperty = $gaProperty;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.admin.google-analytics-service-order-received')
            ->with('email',$this->email)
            ->with('gaProperty',$this->gaProperty);
    }
}
