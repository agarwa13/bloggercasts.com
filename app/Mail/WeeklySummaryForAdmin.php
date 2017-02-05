<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
use App\User;

class WeeklySummaryForAdmin extends Mailable
{
    use Queueable, SerializesModels;

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

        // Set variable to one week ago
        $one_week_ago = Carbon::now()->subWeek();
        $two_weeks_ago = $one_week_ago->subWeek();

        // Get the number of users that were created during the last 7 days and the previous period
        $number_of_new_users = User::where('created_at','>',$one_week_ago->toDateTimeString())->count();
        $number_of_new_users_in_previous_period = User::where('created_at','>',$one_week_ago->toDateTimeString())->where('created_at','<',$two_weeks_ago->toDateTimeString())->count();

        // Send the email
        return $this->view('emails.admin.weekly-summary')
            ->with('number_of_new_users',$number_of_new_users)
            ->with('number_of_new_users_in_previous_period',$number_of_new_users_in_previous_period);
    }
}
