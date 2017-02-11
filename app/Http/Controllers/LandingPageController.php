<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function eliminateAnalyticsSpam(){
        return view('services.eliminate-analytics-spam');
    }
}
