<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jrean\UserVerification\Facades\UserVerification;

class WelcomeController extends Controller
{
    /**
     * Show the application splash screen.
     *
     * @return Response
     */
    public function show(Request $request)
    {
        return view('welcome');
    }

    /**
    * Resend the Confirmation Email
    */
    public function resendConfirmationEmail(Request $request)
    {
		UserVerification::generate($request->user());
		UserVerification::send($request->user(), 'Welcome to Bloggercasts. Confirm registration to enable Unlimited Access');

		return view('email-verification.resend-confirmation-email');
    }


}
