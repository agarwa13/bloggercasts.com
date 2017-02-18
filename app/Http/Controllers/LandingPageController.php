<?php

namespace App\Http\Controllers;

use App\Mail\ChargeFailed;
use App\Mail\GoogleAnalyticsEliminateSpamServiceOrderReceived;
use App\Mail\SetupAppointmentForFreeWordPressSetup;
use App\Mail\WordPressSetupServiceRequestReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Stripe\Charge;
use Stripe\Error\Card;
use Stripe\Stripe;

use Bugsnag\BugsnagLaravel\Facades\Bugsnag;

class LandingPageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function eliminateAnalyticsSpam(){
        return view('services.eliminate-analytics-spam');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function purchasedEliminateAnalyticsSpam(){
        return view('services.eliminate-analytics-spam-thank-you');
    }


    public function freeWordPressSetup(){
        return view('services.free-wordpress-setup');
    }

    public function purchasedFreeWordPressSetup(Request $request){

        /*
         * Send an email to the user asking them at what time they will be available
         */
        Mail::to($request->email)
            ->send(new SetupAppointmentForFreeWordPressSetup());

        /*
         * Send Email to Admin to inform them that someone signed up for the service.
         */
        Mail::to('nikhil@bloggercasts.com')
            ->send(new WordPressSetupServiceRequestReceived($request->email));

        /*
         * Send the user to the thank you view
         */
        return view('services.free-wordpress-setup-thank-you');
    }


}


