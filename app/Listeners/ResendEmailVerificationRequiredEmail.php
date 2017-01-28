<?php

namespace App\Listeners;

use Laravel\Spark\Events\Profile\ContactInformationUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Jrean\UserVerification\Facades\UserVerification;

class ResendEmailVerificationRequiredEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ContactInformationUpdated  $event
     * @return void
     */
    public function handle(ContactInformationUpdated $event)
    {
        // Resend Email Verification
        UserVerification::generate($event->user);
        UserVerification::send($event->user, 'Welcome to Bloggercasts. Confirm registration to enable unlimited access');
    }
}
