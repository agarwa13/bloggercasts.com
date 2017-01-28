<?php

namespace App\Listeners;

use Laravel\Spark\Events\Auth\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Jrean\UserVerification\Facades\UserVerification;

class SendEmailVerificationRequiredEmail
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
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        // Create User Verification Token and Send it to the User
        UserVerification::generate($event->user);
        UserVerification::send($event->user, 'Welcome to Bloggercasts. Confirm registration to enable unlimited access');
    }
}
