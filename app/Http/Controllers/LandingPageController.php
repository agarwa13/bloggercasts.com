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
    public function eliminateAnalyticsSpam(){
        return view('services.eliminate-analytics-spam');
    }

    public function purchasedEliminateAnalyticsSpam(Request $request){

        /*
         * We receive the following from the form that is submitted
         */

        // gaProperty
        // stripeToken
        // stripeEmail

        Stripe::setApiKey(env('STRIPE_SECRET'));

        try{
            Charge::create(array(
                "amount" => 9700,
                "currency" => "usd",
                "description" => "Eliminate Spam in gaProperty",
                "source" => $request->stripeToken
            ));

            Mail::to('nikhil@bloggercasts.com')
                ->send(new GoogleAnalyticsEliminateSpamServiceOrderReceived($request->stripeEmail, $request->gaProperty));

            return view('services.eliminate-analytics-spam-thank-you');

        } catch(Card $e) {
            Mail::to('nikhil@bloggercasts.com')
                ->send(new ChargeFailed());

            return back()->with('warning','We were unable to charge your card. Please try again.');
        }


    }
}


