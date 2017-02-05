<?php

namespace App\Console;

use App\Mail\WeeklySummaryForAdmin;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        // Email a report of the number of new registrations to the admins
        $schedule->call(function(){
            // Send an Email to the Admin
            Mail::to('nikhil@bloggercasts.com')->send(new WeeklySummaryForAdmin());
        })->weekly();

        // Populate the Metrics in the Spark Dashboard
        $schedule->command('spark:kpi')->dailyAt('23:55');

        // Remove Notifications and Announcements
        $schedule->call(function(){

            // Delete all notifications that are at least two weeks old
            DB::table('notifications')
                ->where('created_at','<',Carbon::now()->subWeek(2)->toDateTimeString())->delete();

            // Delete Notifications that are Read and at least a Week old
            DB::table('notifications')
                ->where('read',true)
                ->where('created_at','<',Carbon::now()->subWeek()->toDateTimeString())->delete();

            // Delete Announcements that are one or more old
            DB::table('announcements')
                ->where('created_at','<',Carbon::now()->subYear()->toDateTimeString())->delete();

        })->dailyAt('23:56');
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
