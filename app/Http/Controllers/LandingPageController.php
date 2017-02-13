<?php

namespace App\Http\Controllers;

use App\Mail\ChargeFailed;
use App\Mail\GoogleAnalyticsEliminateSpamServiceOrderReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Stripe\Charge;
use Stripe\Error\Card;
use Stripe\Stripe;

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

    public function purchasedFreeWordPressSetup(){
        return view('services.free-wordpress-setup-thank-you');
    }


}


