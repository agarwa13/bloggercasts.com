<?php

namespace App\Listeners;

use Laravel\Spark\Events\Auth\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use MailerLiteApi\MailerLite;

class AddSubscriberToMailerLite implements ShouldQueue
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
        // Subscribe User to MailerLite
        $mailerLite = new MailerLite(env('MAILERLITE_KEY'));
        $groupsApi = $mailerLite->groups();

        $groupId = env('MAILERLITE_GROUP_ID');

        $subscriber = array(
            'email' => $event->user->email,
            'fields' => array(
                'name' => $event->user->name
            ),
            'autoresponders' => true, // Auto Responders will be deployed
            'type' => "subscribed" // Does Not Trigger Double Opt In
        );

        $addedSubscriber = $groupsApi->addSubscriber($groupId, $subscriber);

    }
}
